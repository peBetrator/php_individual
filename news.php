<?php
require_once 'connection.php';
include './log.php';

session_start();

write_logs('navigated news_page');

$id = $_GET['id'];
$query = "SELECT * FROM news WHERE id = $id";
$result = mysqli_query($conn, $query);
$heading = $subheading = $image = $category = $event_date = $description = "";

$rows = mysqli_fetch_array($result);

if (count($rows) === 0) {
    header("Location: index.php");
}

$heading = $rows['heading'];
$subheading = $rows['subheading'];
$image = $rows['image'];
$category = $rows['category'];
$event_date =  date("M d", strtotime($rows['event_date']));
$description = $rows['description'];

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
            <div class="EventArticle">
                <div class="ImageBox">
                    <img src="<?php echo $image ?>" class="Image" alt="Event" />
                </div>
                <p class="Heading">
                    <?php echo $heading ?>
                </p>
                <p class="Subheading">
                    <?php echo $subheading ?>
                </p>
                <p class="MainText">
                    <?php echo $description ?>
                </p>
                <div class="AdditionalInfoBox">
                    <span class="Category">
                        <?php echo $category ?>
                    </span>
                    <span class="Date">
                        <?php echo $event_date ?>
                    </span>
                </div>
            </div>
        </main>
    </div>
</body>

</html>