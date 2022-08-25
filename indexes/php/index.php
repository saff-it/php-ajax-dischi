<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- css style sheet  -->
    <link rel="stylesheet" href="../../css/style.css">

    <title>Php Dischi</title>
</head>

<body>

    <header>
        <div class="container-fluid">
            <img class="ms_header-logo" src="../../img/logo-small.svg" alt="Logo">
        </div>
    </header>

    <main>
        <div class="container">

            <section>

                <?php 
                    include __DIR__ . './server.php';
                    foreach($albums as $album) {                    
                
                ?>
                <div class="ms_disc-container">
                    <img src="<?php echo $album['poster'] ?>" alt="Disc Cover">
                    <h3><?php echo $album['title'] ?></h3>
                    <span> <?php echo $album['author'] ?> <br> <?php echo $album['year'] ?></span>
                </div>
                <?php 
                    }          
                ?>

            <section>

        </div>
    </main>

</body>

</html>