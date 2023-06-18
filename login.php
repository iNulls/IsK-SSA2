<?php
// Configurações do banco de dados
$hostname = 'localhost';
$username = 'root';
$password = '1578901';
$database = 'ssa';

// Conectando ao banco de dados
$mysqli = mysqli_connect($hostname, $username, $password, $database);

// Verificando erros na conexão
if ($mysqli->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $mysqli->connect_error);
}

// Verifica se o formulário de login foi enviado
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Obtem as credenciais do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL para verificar as credenciais no banco de dados
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $mysqli->query($query);

    // Verifica se o resultado possui algum registro
    if ($result->num_rows == 1) {
        // Credenciais corretas, redireciona para a página de sucesso
        session_start();
        $_SESSION["username"] = $_POST["username"];
        header('Location: cadastrar_aluno.php');
        exit();
    } else {
        // Credenciais inválidas, exibe uma mensagem de erro
        echo "<script>alert('Login ou Senha Invalidos. Tente novamente.');</script>";
        echo '<script>window.location.href = "index.php";</script>';
    }
}

// Fecha a conexão com o banco de dados
$mysqli->close();
?>
