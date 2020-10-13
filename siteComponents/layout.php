<!doctype html>
<html lang="ru" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/style.css">
    <title><?=$title;?></title>
</head>

<body class="d-flex flex-column h-100">
<header>
    <?php include 'header.php';?>
</header>

<main role ="main" class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php include 'navigation.php';?>
            </div>
            <div class="col-sm-9">
                <?php include($content);?>
            </div>
        </div>
    </div>
</main>

<footer class="footer mt-auto">
    <?php include 'footer.php';?>
</footer>

<script src="../js/jquery-3.5.1.min.js" ></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>