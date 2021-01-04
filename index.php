<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- import css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Import js -->
    <script src="js/script.js"></script>

    <!-- import icon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../../assets/css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="../../../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../../global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../../assets/examples/css/forms/layouts.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="../../../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- menu -->
    <div class="row">
        <div class="col-md-12">
            <?php include 'menu.php'; ?>
        </div>
    </div>

    <!-- nav -->
    <div class="row">
        <!-- side nav -->
        <div class="col-md-3">
            <?php include 'navbar.php'; ?>
        </div>
        <!-- content -->
        <div class="col-md-9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php include 'content.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="row">
        <div class="col-md-12">
            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>

</html>