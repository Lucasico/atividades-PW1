<?php
require_once("./validateData.php");
require_once("./processItemOrder.php");


if (validateData($_POST)) {
        $itemAndPrice = processItem($_POST['item']);
}  
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../assets/style/styleOrder.css" />
        <title>Confirmação de pedido</title>
</head>

<body>
        <form class="myForm" action="./calculateAndIssueOrder.php" method="POST">
                <div class="contact">

                        <label for="product">produto</label>
                        <input type="text" value="<?php print $itemAndPrice[0]; ?>"  name="product" disabled>
                        <input type="hidden" name="priceProduct" value="<?php print $itemAndPrice[1] ?>" /> 
                        <input type="hidden" name="nameProduct" value="<?php print $itemAndPrice[0] ?>" /> 
                        
                        <label for="qtd">Quantidade</label>
                        <input type="number" name="qtd">

                        <label for="address">Endereço</label>
                        <input type="text" name="address">

                        <label for="payment">Forma de pagamento</label><br><br>


                        <label for="dinheiro">Dinheiro</label>
                        <input type="radio" value="dinheiro" name="payment" />
                        <label for="dinheiro">Cartão</label>
                        <input type="radio" value="cartao" name="payment" />

                        <br><br>
                        <button type="submit">Realizar Pedido</button>
                </div>
        </form>
</body>

</html>