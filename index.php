<?php
include './log.php';

session_start();
require_once('connection.php');

write_logs('navigated home_page');

$query = "SELECT id, heading, subheading, image, category, event_date FROM news ORDER BY event_date DESC;";
$result = mysqli_query($conn, $query);
$id = $heading = $subheading = $image = $category = $event_date = "";

$eventPreviews = [];
while ($rows = mysqli_fetch_array($result)) {
    $id = $rows['id'];
    $heading = $rows['heading'];
    $subheading = $rows['subheading'];
    $image = $rows['image'];
    $category = $rows['category'];
    $event_date = date("M d", strtotime($rows['event_date']));

    $eventPreviews[] =
        "<a class='col-12 col-sm-6 col-md-4 EventPreview'  href='news.php?id=$id'>
            <div class='ImageBox'>
                <img class='Image' src='$image' alt='$category'/>
            </div>
            <div class='Details'>
                <h2 class='Heading'>$heading</h2>
                <h3 class='Subheading'>$subheading</h3>
                <div class='AdditionalInfoBox'>
                    <span class='Category'>$category</span>
                    <span class='Date'>$event_date</span>
                </div>
            </div>
        </a>";
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
            <div class="row Events">
                <?php
                foreach ($eventPreviews as $eventPreview) {
                    echo $eventPreview;
                }
                ?>
            </div>
        </main>
    </div>
    <footer class="page-footer">
        <div class="footer-copyright text-center py-3">© 2019 Copyright: Max Negal
        </div>
    </footer>
</body>

</html>