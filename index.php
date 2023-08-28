<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_GET["elkuldve"]) && strlen($_GET["nev"]) > 0 && strlen($_GET["email"]) > 0 )
{
print "Üdvözlünk kedves ".$_GET["nev"].", az email címed: ".$_GET["email"]."<hr>";
}else{
    print "Töltsd ki az űrlapot és küld el!<hr>";
}

?>
 


    <form action="" method="get">
        <input type="text" name="nev" placeholder="Add meg a neved!">
        <br><br>
        <input type="text" name="email" placeholder="Add meg az email címed!">
        <br><br>
        <button type="submit" name="elkuldve">Küldés</button>
    </form>
</body>
</html>