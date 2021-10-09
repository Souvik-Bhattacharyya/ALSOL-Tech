<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="refresh">
    <title>Alsol Technology Solution Pvt. Ltd.</title>
    <link rel="icon" href="./Assets/Icons/Logo/LOGO-dark.png">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>




    <!-- Java Scripts -->
    <script src="https://kit.fontawesome.com/c932ce0340.js" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" crossorigin="anonymous"></script>
    <script src="./js/index.js" type="text/javascript"></script>
</body>
</html>