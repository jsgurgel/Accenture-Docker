<?php
// index.php - Exemplo simples que conecta ao MySQL usando variáveis de ambiente

$db_host = getenv('DB_HOST') ?: 'db';
$db_port = getenv('DB_PORT') ?: '3306';
$db_name = getenv('DB_NAME') ?: 'toshirodb';
$db_user = getenv('DB_USER') ?: 'toshiro';
$db_pass = getenv('DB_PASS') ?: 'toshiro_pass';

$dsn = "mysql:host=$db_host;port=$db_port;dbname=$db_name;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->query('SELECT id, nome, email FROM usuarios LIMIT 10');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Toshiro - Demo</title></head>
<body>
<h1>Toshiro Shibakita - Demo Docker</h1>
<?php if (!empty($error)): ?>
    <p style="color:red;">Erro ao conectar: <?= htmlspecialchars($error) ?></p>
<?php else: ?>
    <h2>Usuários no banco</h2>
    <?php if (count($users) === 0): ?>
        <p>(Nenhum usuário encontrado)</p>
    <?php else: ?>
        <ul>
            <?php foreach ($users as $u): ?>
                <li><?= htmlspecialchars($u['id']) ?> - <?= htmlspecialchars($u['nome']) ?> (<?= htmlspecialchars($u['email']) ?>)</li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<?php endif; ?>
<p>Serviços: nginx (web) → php-fpm (app) → mysql (db)</p>
</body>
</html>
