<!doctype html>
<html lang="en">
    <head>
        <title>Página Inicial</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel='stylesheet'
            href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css'>
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/footer.css">
    </head>

    <body>

        <div class="container">
        
            <header>
                <?php include('./src/pages/menus/navbar.php')?>
            </header>

            <main class="d-flex align-items-center mt-4 mb-4">
                <div class="main-text">
                    <div class="main-title">
                        <h1>Welkome to <span>Landkit</span>.</h1>
                        <h1>Develop anything</h1>
                    </div>
                    <div class="main-description">
                        <p>Build a beautiful, modern website with</p>
                        <p>flexible Bootstrap built from scratch.</p>
                    </div>
                    <div class="main-buttons">
                        <button class="btn btn-primary">View all pages</button>
                        <button class="btn btn-secondary">Documentation</button>
                    </div>

                    </div>
                        <div class="main-img">
                        <img src="./img/main-img.png" alt="Ilustração representando dois homens e uma mulher em reunião">
                </div>
            </main>

            <?php include('./src/pages/menus/footer.php')?>

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>