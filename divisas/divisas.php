<?php
if(isset($_POST["conversion"]) && (is_numeric($_POST["conversion"]) || is_numeric(str_replace(",",".",$_POST["conversion"]))))
{
    $conversion=str_replace(",",".",$_POST["conversion"]);
}else{
    $conversion=1.36;
}
 
# valor a convertir
if(isset($_POST["aconvertir"]) && (is_numeric($_POST["aconvertir"]) || is_numeric(str_replace(",",".",$_POST["aconvertir"]))))
{
    $aconvertir=str_replace(",",".",$_POST["aconvertir"]);
}else{
    $aconvertir=0;
}

$resultado=$conversion*$aconvertir;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="divisas.css">
    <title>Document</title>
</head>
<body>
    <h1>Conversor de Monedas</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
 
        <span>Valor de conversión</span>
            <input type="text" name="conversion" value="<?php echo $conversion?>">
 
        <br><span>Euros</span>
            <input type="text" name="aconvertir" value="<?php echo $aconvertir?>">
 
        <br><span>Dollares</span>
            <input type="text" name="resultado" readonly value="<?php echo number_format($resultado,2,".",",")?>">
 
        <p><input type="submit" value="Calcular"></p>
    </form>
</body>
</html>