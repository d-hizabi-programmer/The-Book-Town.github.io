<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>THEBOOKTOWN- Let's get lost in the pages</title>

    <!-- logo in browser tab -->
    <link rel="icon" href="images/logo.png">

    <!-- linking bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- linking google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- linking custom style sheeet -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/index.css">
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg bgColor p-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/BRAND.png" alt="TheBooktown-Let's get lost in the pages" width="300" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 headfonts fontBold fontDark">
                    <li class="nav-item">
                        <a class="nav-link fontDark activ" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link fontDark" href="store.php">STORE</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link fontDark" href="contact.html">CONTACT</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!--section as banner-->
    <section role="banner" class="d-flex flex-lg-row flex-md-column-reverse flex-sm-column-reverse p-0 m-0">
        <div class="align-self-center">
            <h1 class=" fontDark headfonts text-center fs-1"><span class="fontBold">THE</span><span>BOOK</span><span
                    class="fontPink fontBold">TOWN</span><span class="fs-5"> Let's get lost in the pages</span>
            </h1>
            <p class=" fontDark parafonts text-center pt-2 p-5 fs-5">Buy books for the best price! <br>From literature
                to educational resources, we have a
                lot of books to offer you.
                <br>
                <a type="button" class="p-2  mt-3 fontBold btn btnBg" href="store.php">GO TO STORE</a>

            </p>

        </div>
        <img src="images/banner.gif" class="flex-lg-grow-1 flex-md-shrink-1 img-fluid" alt="Kids reading books">

    </section>
    <!-- footer -->
    <!-- <footer> -->
    <p class="fontDark parafonts text-end fs-5 pe-5">Made with <span class="fontPink fs-1 ">&hearts; </span> by
        Saniya
        Memon- 2022</p>
    <!-- </footer> -->
    <!-- bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

</body>

</html>