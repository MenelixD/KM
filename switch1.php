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
        $dzien = 2;

        switch($dzien){
            case 1:
                echo 'poniedzialek';
                break;
            case 2:
                echo 'wtorek';
                break;
            case 3:
                 echo 'środa';
                 break;
            default:
                echo 'nie znam takiego dnia tygodnia';
        }
    ?>
</body>
</html>