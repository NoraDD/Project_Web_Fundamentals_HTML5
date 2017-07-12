<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="stylesheets/style.css"/>
    <link rel="stylesheet" href="stylesheets/header.css"/>
    <link rel="stylesheet" href="stylesheets/main.css"/>
    <link rel="stylesheet" href="stylesheets/footer.css"/>
    <link rel="stylesheet" href="stylesheets/responsive.css"/>
</head>
<body>
<header>
    <?php
    include 'header.php';
    ?>
</header>

<main>
    <?php
    $pages = array("home", "services", "about", "store", "contact");
    if (isset($_GET['page']) && in_array($_GET['page'], $pages)) {
        include('pages/' . $_GET['page'] . '.php');
    } else {
        include('pages/home.php');
    }
    ?>
</main>

<footer>
    <?php
    include("footer.php");
    ?>
</footer>

<div class="shopping-cart">
    <span>0</span>
    <a class="fa fa-shopping-cart ic-shopping-cart"></a>
</div>

<script src="javascripts/script.js"></script>
</body>
</html>