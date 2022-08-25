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

                <div class="ms_disc-container">
                    <img src="data:image/jpeg;base64,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" alt="Disc Cover">
                    <h3>TITOLO</h3>
                    <span>AUTORE <br> ANNO</span>
                </div>

            <section>

        </div>
    </main>

</body>

</html>