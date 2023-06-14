<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php
    $cupons['NIVER10'] = 10;
    $cupons['PROMO15'] = 15;
    $desconto = 0;
    if(isset($_GET['cupom'])){
        $desconto = $cupons[$_GET['cupom']];
    }
    $preco = 200;
    ?>
    <h1><a href="loja.php">Shopping Virtual</h1>
    <img src="https://icons.icoarchive.com/icons/dailyoverview/tv/128/television-08-icon.png" />
    <h3>Preço: R$ <?php echo (($preco * (100 - $desconto)/  100));?>
</body>
</html>