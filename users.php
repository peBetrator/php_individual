<?php
include './log.php';

session_start();
require_once('connection.php');

write_logs('navigated users_page');

$query = "SELECT * FROM admins;";
$result = mysqli_query($conn, $query);
$email = $password = "";

$file_name = './logs.txt';
$data = file($file_name);


$eventPreviews = [];
while ($rows = mysqli_fetch_array($result)) {
    $email = $rows['email'];
    $password = $rows['password'];

    $eventPreviews[] = "
    <tr>
        <td>$email</td>
        <td>$password</td>
    </tr>";
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Science Daily News</title>
</head>

<body>
    <?php require_once 'header.php'; ?>
    <h1>Users</h1>
    <table>
        <tr>
            <th>E-mail</th>
            <th>Password</th>
        </tr>
        <?php
        foreach ($eventPreviews as $eventPreview) {
            echo $eventPreview;
        }
        ?>
    </table>

    <h1>Logs</h1>
    <table>
        <?php
        foreach ($data as $line) :
            $line = explode("\t\t", $line);
            ?>
            <tr>
                <td><?= $line[0] ?></td>
                <td><?= $line[1] ?></td>
                <td><?= $line[2] ?></td>
                <td><?= $line[3] ?></td>
                <td><?= $line[4] ?></td>
                <td><?= $line[5] ?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>

    <footer class="page-footer">
        <div class="footer-copyright text-center py-3">© 2019 Copyright: Max Negal
        </div>
    </footer>
</body>

</html>