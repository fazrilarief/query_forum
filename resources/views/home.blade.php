<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container flex justify-content-between">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-between">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" aria-current="page" href="#">Discussions</a>
                    </li>
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" aria-current="page" href="#">About Us</a>
                    </li>
                </ul>
                <form class="d-flex w-50" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <a href="#" class="btn btn-primary text-nowrap">Log in</a>
                <a href="#" class="btn btn-white text-nowrap">Sign up</a>
            </div>
        </div>
    </nav>

</body>


</html>
