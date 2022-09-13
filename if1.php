<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
    $liczba = 123;
    if($liczba == 0) echo 'podana liczba jest równa 0';
    elseif($liczba > 0) echo 'podana liczba jest większa od 0';

    else echo 'podana liczba jest mniejsza od 0';

    ?>

    <?php
        $a = 123;
        if($a>0) :
    ?>

    <div style = "color:blue;">podana lczba jest większa od 0</div>

    <?php endif; ?>



</body>
</html>