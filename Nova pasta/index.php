<!DOCTYPE html>
<html>
<head>
    <title>Picaretas Bank - Controle de Contas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <h1>Picaretas Bank - Controle de Contas</h1>
    </header>
    <main>
        <form action="pages/account.php" method="GET">
            <label for="accountNumber">Número da Conta:</label>
            <input type="text" id="accountNumber" name="accountNumber" required>
            <button type="submit">Buscar</button>
        </form>
    </main>
</body>
</html>
