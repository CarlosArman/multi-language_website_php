<?php
    include "./config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['title']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href=""><?= $lang['home']?></a></li>
                <li class="nav-item"><a class="nav-link" href=""><?= $lang['pricing']?></a></li>
                <li class="nav-item"><a class="nav-link" href=""><?= $lang['contact']?></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container" style="margin-top: 100px;">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h1><?= $lang['title']?></h1>
                    <p><?= $lang['description']?></p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer bg-dark">
            <p>
            <a href="index.php?lang=en"><?= $lang['lang_en']?></a> | 
            <a href="index.php?lang=es"><?= $lang['lang_es']?></a>
            </p>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>