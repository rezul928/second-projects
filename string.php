<?php
    include "function.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String on php</title>
</head>
<body>

<?php
    $users = get_users_info();
?>

<?php foreach ($users as $user): ?>
    <?php
        $template = "Hello Dear #name# with email: {email} ";
        $template = str_replace(array("#name#" , "{email}") , array($user['name'] , $user['email']) , $template)
    ?>
    <p><?php echo $template?></p>
<?php endforeach; ?>

</body>
</html>