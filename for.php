<?php
    include "function.php";
    $users = get_users_info();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>for in php</title>
</head>

<style>
    table,td,tr,th{
        border: solid 1px #dddddd;
    }
    table{
        padding: 5px 10px;
    }

</style>

<body>
<table>

    <?php for ($i=0 ; $i<10 ; $i++): ?>
        <tr>
            <?php for ($j=0 ; $j<5 ; $j++ ): ?>
                <?php
                    $red = mt_rand(0 , 255);
                    $green = mt_rand(0 , 255);
                    $blue = mt_rand(0 , 255);
                ?>
                <td style="background-color: rgb(<?php echo $red . "," . $green . "," . $blue?>)"> <?php echo $i * $j ?> </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>

</table>
</body>
</html>