<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE DATABASE IF NOT EXISTS projeto1 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");
    $pdo->exec("USE projeto1");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS clientes (
            id INT AUTO_INCREMENT PRIMARY KEY,
            cliente VARCHAR(100) NOT NULL,
            cidade VARCHAR(100) NOT NULL,
            estado CHAR(2) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS produtos (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome_produto VARCHAR(100) NOT NULL,
            numero_serie VARCHAR(50) NOT NULL,
            preco DECIMAL(10,2) NOT NULL,
            quantidade_estoque INT NOT NULL DEFAULT 0
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ");

    if (empty($_SESSION['db_message_shown'])) {
        echo '<div id="db-message" style="background:#d4edda;color:#155724;padding:10px;border-radius:5px;margin:10px 0;border:1px solid #c3e6cb;">
                ✅ Banco de dados e tabelas verificados/criados com sucesso!
              </div>
              <script>
                  setTimeout(() => {
                      const msg = document.getElementById("db-message");
                      if (msg) msg.style.display = "none";
                  }, 3000);
              </script>';
        $_SESSION['db_message_shown'] = true;
    }

} catch (PDOException $e) {
    die("❌ Erro ao criar banco ou tabelas: " . $e->getMessage());
}
?>
