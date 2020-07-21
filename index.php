<?php
    include "function.php";
    if (isset($_POST['send'])){
        var_dump($_POST);
        $background_color = select_bg($_POST['background']);

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Second session</title>
</head>
<body style="background-color: <?php echo $background_color; ?>">
    <?php if (is_user_logged_in()): ?>
        <p>welcome</p>
    <?php else: ?>
        <a href="">loggin</a>
    <?php endif; ?>
<!---->
<!--    --><?php
//        $a = true;
//        switch (a){
//            case true:
//                echo "true";
//                break;
//
//            case false:
//                echo "false";
//                break;
//
//            default:
//                echo "Default";
//                break;
//        }
//
//    ?>

    <form action="" method="post">
        <input type="radio" name="background" value="blue">Blue
        <input type="radio" name="background" value="green">Green
        <input type="radio" name="background" value="red">Red
        <input type="submit" value="send" name="send">
    </form>
</body>
</html>