<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $priceProduct = $_POST['priceProduct'];
    $nameProduct = $_POST['nameProduct'];
    $qtd = $_POST['qtd'];
    $address = $_POST['address'];
    $payment = $_POST['payment'];
    $numberOrder = rand();
    $valueOrder = $priceProduct * $qtd;
} else {
    header('Location: ../index.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/style/styleConfirmedOrder.css" />
    <title>Pedido Confirmado</title>
</head>

<body>
    <div class="flex-container">
        <div>
            <div class="numberOrder">
                Número do pedido: <?php echo $numberOrder ?>
            </div>
            <div class="itensOrder">
                Item: <?php echo $nameProduct ?>
            </div>
            <div class="itensOrder">
                Quantidade: <?php echo $qtd ?>
            </div>
            <div class="itensOrder">
                Preço unitário: <?php echo $priceProduct ?>
            </div>
            <div class="itensOrder">
                Preço total: <?php echo $valueOrder ?>
            </div>
            <div class="itensOrder">
                Forma de pagamento: <?php echo $payment ?>
            </div>
            <div class="itensOrder">
                Endereço de entrega: <?php echo $address ?>
            </div>

        </div>

    </div>
</body>

</html>