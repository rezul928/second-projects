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

</style>

<body>
<table>
    <?php if ($users && count($users) > 0): ?>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>actions</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td></td>
            </tr>
        <?php endforeach; ?>

    <?php else: ?>
        <tr>
            <td colspan="4">
                <span>هیچ اطلاعاتی یافت نشد</span>
            </td>
        </tr>
    <?php endif; ?>


</table>

</body>
</html>