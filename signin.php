<?php
require_once('connection.php');
session_start();
$errorMessage = "";

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ((isset($_POST["email"])) and (!empty($_POST['email'])) and (isset($_POST["password"])) and (!empty($_POST['password']))) {
        $email = validate($_POST["email"]);
        $password = md5(validate($_POST["password"]));

        $query = "SELECT * FROM admins WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_fetch_array($result);
        if (count($rows) > 0) {
            $_SESSION['user'] = $email;
            $_SESSION['id_rol'] = 'admin';
            header("Location: index.php");
        } else {
            $errorMessage = "<p class='Error'>Access denied</p>";
        }
    }
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
    <div class="container">
        <?php require_once 'header.php'; ?>
        <main>
            <div class="row Signin">
                <?php echo $errorMessage ?>
                <div class='FormCaption'>Sign In</div>
                <form action="signin.php" class="Form" method="POST">
                    <div class='Input'>
                        <input id="email" type="email" name="email" class="InputElement" placeholder="Email" />
                    </div>
                    <div class='Input'>
                        <input id="password" type="password" name="password" class="InputElement" placeholder="Password" />
                    </div>
                    <button class='Button'>Log in</button>
                    <p id='err'></p>
                </form>
            </div>
        </main>
    </div>
    <footer class="page-footer">
        <div class="footer-copyright text-center py-3">© 2019 Copyright: Max Negal
        </div>
    </footer>
    <script>
        function validare() {
            var log = document.getElementById("email").value;
            var pass = document.getElementById("password").value;
            var mess = "";
            var er = 0;
            if (!/^[A-z0-9]{4,20}$/.test(log)) {
                mess += "Login should contain 4-20 characters";
                er = er + 1;
            }
            if (!/^[A-z0-9]{4,20}$/.test(pass)) {
                mess += "Password must contain 4-20 characters";
                er++;
            }
            document.getElementById("err").innerHTML = mess;
            return er == 0;
        }
    </script>

</body>

</html>