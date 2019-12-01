<?php
include './log.php';
include 'connection.php';

session_start();

write_logs('navigated add_page');

if (!isset($_SESSION['user']) or empty($_SESSION['user'])) {
    header('Location: index.php');
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function checkValidity($key)
{
    return (isset($_POST[$key])) and (!empty($_POST[$key]));
}

$heading = $subheading = $image = $description = $category = $event_date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    write_logs('request POST news');
    if (
        checkValidity('heading') and
        checkValidity('subheading') and
        checkValidity('description') and
        checkValidity('category') and
        checkValidity('event_date')
    ) {
        $heading = validate($_POST['heading']);
        $subheading = validate($_POST['subheading']);
        $description = validate($_POST['description']);
        $category = validate($_POST['category']);
        $event_date = validate($_POST['event_date']);

        $current_dir = "assets/news_pictures/";

        $current_file = $current_dir . basename($_FILES["image"]["name"]);


        if ($current_file != "assets/news_pictures/") {
            if (
                $_FILES["image"]["size"] <= 100000000 and (pathinfo($current_file, PATHINFO_EXTENSION) === "png" or pathinfo($current_file, PATHINFO_EXTENSION) === "jpg")
            ) {
                move_uploaded_file($_FILES['image']['tmp_name'], $current_file);
                $image = $current_file;
                $query = "INSERT INTO news (heading, subheading, image, description, category, event_date) VALUES ('$heading', '$subheading', '$image', '$description', '$category', '$event_date')";
                $result = mysqli_query($conn, $query);
                write_logs('request POST news SUCCESS');
                header('Location: index.php');
            }
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
            <form enctype="multipart/form-data" method="post" action="add.php" class="row AddEvent">
                <label class="ImageBox">
                    <input name="image" type="file" class="Hidden" id="imgInp" />
                    <img id="img" src="assets/images/add_image_placeholder.png" class="ImagePlaceholder" alt="Event" />
                </label>
                <textarea name="heading" placeholder="Heading" class="TextArea Heading"></textarea>
                <textarea name="subheading" placeholder="Subheading" class="TextArea Subheading"></textarea>
                <textarea name="description" placeholder="Main text" class="TextArea MainText"></textarea>
                <div class="AdditionalInfoBox">
                    <input name="category" placeholder="Category" class="Input Category" />
                    <input name="event_date" type="date" placeholder="Date" class="Input Date" />
                </div>
                <div class="Publish">
                    <button class="Button">
                        Publish
                    </button>
                </div>
            </form>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/add.js"></script>
</body>

</html>