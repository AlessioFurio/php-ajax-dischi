<?php include 'dischi.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../dist/app.css">
        <title></title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <img src="../dist/images/logo.svg" alt="">
                </div>

                <div class="nav-menu">
                    <ul>
                        <li>
                            <a href="#">Premium</a>
                        </li>
                        <li>
                            <a href="#">Assistenza</a>
                        </li>
                        <li>
                            <a href="#">Scarica</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="container-cards">
            <div class="cards">

                <?php foreach ($dischi as $disco) { ?>
                    <div class="card">
                        <img src="<?php echo $disco['poster']; ?>" alt="">
                        <p><?php echo $disco['title']; ?></p>
                        <p><?php echo $disco['author']; ?></p>
                        <p><?php echo $disco['year']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>
