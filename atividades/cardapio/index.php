<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/style/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Cardápio</title>

</head>

<body>
    <h3>Cardapio de lasanhas</h3>
    <div class="container">
        <form action="./processOrder/process.php" method="POST">
            <div class="item">
                <div>
                    <figure>
                        <h6>Preço: 5.00</h6>
                        <figcaption>Ingredientes do produto:</figcaption>
                        <div class="section-form">
                            <h6>presunto, frango e carne moida</h6>
                        </div>
                        <img src="./assets/img/lasanha.png" alt="Minha Figura">
                    </figure>
                    </input>
                    <input type="submit" class="button" value="Lasanha-1" name="item">
                </div>
            </div>
            <div class="item">
                <div>
                    <figure>
                        <h6>Preço: 6.00</h6>
                        <figcaption>Ingredientes do produto:</figcaption>
                        <div class="section-form">
                            <h6>presunto, frango e carne moida</h6>
                        </div>
                        <img src="./assets/img/lasanha.png" alt="Minha Figura">
                    </figure>
                    <input type="submit" class="button" value="Lasanha-2" name="item">
                </div>
            </div>
            <div class="item">
                <div>
                    <figure>
                        <h6>Preço: 7.00</h6>
                        <figcaption>Ingredientes do produto:</figcaption>
                        <div class="section-form">
                            <h6>presunto, frango e carne moida</h6>
                        </div>
                        <img src="./assets/img/lasanha.png" alt="Minha Figura">
                    </figure>
                    <input type="submit" class="button" value="Lasanha-3" name="item">
                </div>
            </div>
            <div class="item">
                <div>
                    <figure>
                        <h6>Preço: 8.00</h6>
                        <figcaption>Ingredientes do produto:</figcaption>
                        <div class="section-form">
                            <h6>presunto, frango e carne moida</h6>
                        </div>
                        <img src="./assets/img/lasanha.png" alt="Minha Figura">
                    </figure>
                    <input type="submit" class="button" value="Lasanha-4" name="item">
                </div>
            </div>
           
        </form>
    </div>
</body>

</html>