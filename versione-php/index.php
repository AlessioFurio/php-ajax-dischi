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
            <div class="logo">
                <img src="../dist/images/logo.svg" alt="">
            </div>
        </header>
        <div class="container">
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
