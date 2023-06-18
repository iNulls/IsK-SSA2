<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from alunos where nome like '%$filtro%' or turma like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);


?>

<?php

while($exibirRegistros = mysqli_fetch_array($consulta)) {
$matricula = $exibirRegistros[0];
$nome = $exibirRegistros[1];
$turma = $exibirRegistros[3];
$nascimento = $exibirRegistros[2];

	echo "<article>";

	echo "$matricula";
	echo "$nome";
	echo "$turma";
	echo "$nascimento";
					

	echo "</article>";
}

	mysqli_close($conexao);

?>