<?php
$accounts = [
    // Preencha com os dados das contas (número, saldo, limite de cheque especial)
];

$accountNumber = $_GET['accountNumber'];
$selectedAccount = null;

foreach ($accounts as $account) {
    if ($account['number'] == $accountNumber) {
        $selectedAccount = $account;
        break;
    }
}

if (!$selectedAccount) {
    echo "Conta não encontrada.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Conta - Picaretas Bank</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Detalhes da Conta - Picaretas Bank</h1>
    </header>
    <main>
        <h2>Dados da Conta</h2>
        <p>Número da Conta: <?php echo $selectedAccount['number']; ?></p>
        <p>Saldo Atual: R$ <?php echo $selectedAccount['balance']; ?></p>
        <p>Limite de Cheque Especial: R$ <?php echo $selectedAccount['chequeSpecial']; ?></p>
        
        <h2>Operações</h2>
        <!-- Crie links ou botões para as operações -->
    </main>
</body>
</html>
