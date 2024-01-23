<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <?php

    $p = $_GET['paragraph'];

    $word = $_GET['word'];

    $new_p = str_replace($word, '<span class="text-danger">***</span>', $p);


    $num = count(explode($word, $p)) - 1;
    ?>
    <header>
        <h1 class="text-white">Censurato</h1>
    </header>
    <main>
        <div class="container py-5 bg-white ">
            <div class="row justify-content-center row-gap-3">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="my_card">
                        <h3>Testo iniziale</h3>
                        <p> <?php echo $p; ?> </p>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="my_card">
                        <h3>Censure</h3>
                        <p> <?php echo $new_p; ?> </p>
                        <h6> <?php echo "Parole censurate: " . $num; ?> </h6>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>