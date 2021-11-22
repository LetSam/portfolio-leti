
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- POLICE -->
    <link rel="stylesheet" href="https://use.typekit.net/aav2jsr.css">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/variables.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title><?= $title ?></title>
    
</head>

<body>
    <?php include_once "header.php" ?>

    <main class="main"> <?= $contents; ?> </main>

    <?php
        include_once "footer.php";
        include_once "../frontAlert/sendMailAlert.php";
    ?>

    
    <!-- SCROLL UP -->
    <a href="#" class="scroll-up" id="scroll-up">
        <i class="uil uil-arrow-up scroll-up-icon"></i>
    </a>
    <!-- JS -->
    <script src="public/js/script.js"></script>
    <script src="public/js/form.js"></script> 
</body>
</html>