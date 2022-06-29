<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panthera</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    @include('components.nav')

    @include('components.jquery')

    <!-- Carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/red.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/blue.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/green.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="indexTextContainer">
        <h1><span class="p">P</span>anthera Industrial Automation</h1>
        <h4>Delivering results, reliability, & rock solid dependability.</h4>
        <p>The robotics and machine automation industries have experienced rapid growth in recent years, leading to the
            rise of
            automation solutions for manufacturers. With automation services from a reliable provider, you can secure
            the
            technologies you need to optimize efficiency, increase productivity and reduce downtime in your industrial
            facility.

            At Gibson Engineering Co., Inc., we provide world-class manufacturers with state-of-the-art custom
            automation solutions
            that set the standard for quality, profitability and ease of use. As an automation solutions company with
            award-winning
            engineers and over 75 years of experience, we're the equipment distributors you can trust. Here on our home
            page, we
            have all the information you need to start with our team today.</p>
    </div>




    <script>

    </script>


    @include('components.navJquery')
</body>

</html>