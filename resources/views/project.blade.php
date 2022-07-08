<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panthera</title>
    <link rel="stylesheet" href="ProjectAssets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="ProjectAssets/css/Basic-fancyBox-Gallery.css">
    <link rel="stylesheet" href="ProjectAssets/css/Bootstrap-4---Full-Video-Background-v2.css">
    <link rel="stylesheet" href="/css/Corporate-Footer-Clean.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    @include('components.nav')

    @include('components.jquery')

    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-center p-4 p-lg-5">
                <p class="fw-bold text-primary mb-2" style="color: var(--bs-red);">Proud to introduce</p>
                <h1 class="fw-bold mb-4">Biben dum fringi dictum,<br>augue purus</h1>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row flex-box flex-wrap-wrap">
            <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"
                    title="Hero Image Nature" href="ProjectAssets/img/hero-background-nature.jpg"><img class="img-fluid"
                        src="ProjectAssets/img/hero-background-nature.jpg"></a></div>
            <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"
                    title="Hero Image Technology" href="ProjectAssets/img/hero-background-technology.jpg"><img
                        class="img-fluid" src="ProjectAssets/img/hero-background-technology.jpg"></a></div>
            <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"
                    title="Hero Image Travel" href="ProjectAssets/img/hero-background-travel.jpg"><img class="img-fluid"
                        src="ProjectAssets/img/hero-background-travel.jpg"></a></div>
            <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"
                    title="Hero Image Food" href="ProjectAssets/img/hero-background-food.jpg"><img class="img-fluid"
                        src="ProjectAssets/img/hero-background-food.jpg"></a></div>
            <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"
                    title="Hero Image Music" href="ProjectAssets/img/hero-background-music.jpg"><img class="img-fluid"
                        src="ProjectAssets/img/hero-background-music.jpg"></a></div>
            <div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1"
                    title="Hero Image Photography" href="ProjectAssets/img/hero-background-photography.jpg"><img
                        class="img-fluid" src="ProjectAssets/img/hero-background-photography.jpg"></a></div>
        </div>
    </div>


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="ProjectAssets/js/Basic-fancyBox-Gallery.js"></script>

    @include('components.footer')

    @include('components.navJquery')
</body>

</html>