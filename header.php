<?php
$isAuthenticated = false;
if (isset($_SESSION['user']) and !empty($_SESSION['user'])) {
    $isAuthenticated = true;
}
$menu = [];
$menu[] = "
        <li class='NavigationItem'>
            <a href='index.php' " .
    ((basename($_SERVER['PHP_SELF']) === 'index.php') ? "class='Active'" : " ") . ">
                News
            </a>
        </li>";

if ($isAuthenticated) {
    $menu[] = "
        <li class='NavigationItem'>
            <a href='add.php' " .
        ((basename($_SERVER['PHP_SELF']) === 'add.php') ? "class='Active'" : " ") . ">
                Add News
            </a>
        </li>";
    $menu[] = "
        <li class='NavigationItem'>
            <a href='signout.php' " .
        ((basename($_SERVER['PHP_SELF']) === 'signout.php') ? "class='Active'" : " ") . ">
                Sign Out
            </a>
        </li>";
} else {
    $menu[] = "
        <li class='NavigationItem'>
            <a href='signin.php' " .
        ((basename($_SERVER['PHP_SELF']) === 'signin.php') ? "class='Active'" : " ") . ">
                Sign In
            </a>
        </li>";
}
?>
<header class="Header">
    <div class="LogoBox">
        <a href="index.php">
            <img src="assets/images/logo_long.png" alt="Logo" class="Logo">
        </a>
    </div>
    <ul class="Navigation">
        <?php foreach ($menu as $item) {
            echo $item;
        }
        ?>
    </ul>
</header>
