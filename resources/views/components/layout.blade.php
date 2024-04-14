<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Cocktails' }}</title>
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
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
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recipes">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="resources">Resources</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="px-4 py-2 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('/img/noun_Cocktail_4114534.svg') }} " alt="" width="150">
        <h1 class="display-5 fw-bold">{{ $title ?? 'Cocktails for Beginners' }}</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">{{ $subtitle ?? 'Your resource for getting started with cocktails, including key recipes to try, helpful tips, and other resources.' }}</p>
        </div>
    </div>
</header>

{{ $slot }}

<footer>
    <br>
    <br>
</footer>

<!-- scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/custom.js"></script>
</body>

</html>