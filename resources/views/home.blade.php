<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cocktails for Beginners</title>
    <meta name="description" content="Cocktail recipes to try, helpful tips, and other resources.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recipes/index.html">Recipes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="resources.html">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="attribution.html">Attribution</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="px-4 py-2 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="./assets/img/noun_Cocktail_4114534.svg" alt="" width="150">
            <h1 class="display-5 fw-bold">Cocktails for Beginners</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Your resource for getting started with cocktails, including key recipes to try, helpful tips, and other resources.</p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <h2 class="display-6">Featured Recipes</h2>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <picture>
                        <!-- https://www.liquor.com/recipes/cosmopolitan/ -->
                        <source srcset="./assets/img/cosmopolitan.webp" type="image/webp">
                        <source srcset="./assets/img/cosmopolitan.png" type="image/png">
                        <img src="./assets/img/cosmopolitan.png" class="d-block w-100" alt="Cosmopolitan">
                    </picture>
                    <div class="card-body">
                        <h5 class="card-title">Cosmopolitan</h5>
                        <p class="card-text">The Cosmopolitan is a simple cocktail with a big history. It reached its height of popularity in the 1990s, when the HBO show “Sex and the City” was at its peak.</p>
                        <a href="recipes/cosmopolitan.html" class="btn btn-primary">Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <picture>
                        <!-- https://www.liquor.com/recipes/negroni/ -->
                        <source srcset="./assets/img/negroni.webp" type="image/webp">
                        <source srcset="./assets/img/negroni.png" type="image/png">
                        <img src="./assets/img/negroni.png" class="d-block w-100" alt="Negroni">
                    </picture>
                    <div class="card-body">
                        <h5 class="card-title">Negroni</h5>
                        <p class="card-text">Easy to make and refreshingly bitter, the Negroni is said to have been invented in Florence by the dauntless Italian Count Camillo Negroni in the early 20th century.</p>
                        <a href="recipes/negroni.html" class="btn btn-primary">Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <picture>
                        <!-- https://www.liquor.com/recipes/mojito/ -->
                        <source srcset="./assets/img/mojito.webp" type="image/webp">
                        <source srcset="./assets/img/mojito.png" type="image/png">
                        <img src="./assets/img/mojito.png" class="d-block w-100" alt="Mojito">
                    </picture>
                    <div class="card-body">
                        <h5 class="card-title">Mojito</h5>
                        <p class="card-text">The Mojito is one of the most popular rum cocktails. The origins of this classic drink can be traced to Cuba and the 16th-century cocktail El Draque.</p>
                        <a href="recipes/mojito.html" class="btn btn-primary">Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <picture>
                        <!-- https://www.liquor.com/recipes/manhattan-2/ -->
                        <source srcset="./assets/img/manhattan.webp" type="image/webp">
                        <source srcset="./assets/img/manhattan.png" type="image/png">
                        <img src="./assets/img/manhattan.png" class="d-block w-100" alt="Manhattan">
                    </picture>
                    <div class="card-body">
                        <h5 class="card-title">Manhattan</h5>
                        <p class="card-text">The Manhattan was the most famous cocktail in the world shortly after it was invented in New York City’s Manhattan Club, some time around 1880.</p>
                        <a href="recipes/manhattan.html" class="btn btn-primary">Recipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>