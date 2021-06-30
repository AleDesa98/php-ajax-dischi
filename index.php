<?php include 'database.php'; ?>


<!DOCTYPE html>
    <html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>php-ajax-dischi</title>
    </head>
    <body>
        <header>
            <a href="">
                <img src="img/spotify.png" alt="">
            </a>
        </header>
        <main>
            <section class="container">
                <div>
                    <?php
                        foreach ($discs as $disc) {
                            ?>
                            <div>
                                <section>
                                    <img src=" <?php echo $disc["poster"] ?> " alt="">
                                    <h3> <?php echo $disc["title"] ?> </h3>
                                    <p> <?php  echo $disc["author"] ?> </p>
                                    <p> <p> <?php echo $disc["year"] ?> </p> </p>
                                </section>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>