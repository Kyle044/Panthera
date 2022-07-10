<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panthera Industrial Automation</title>
    <link rel="icon" type="image/png" href="/img/logoEdit.PNG">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Corporate-Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="/css/Projects-Grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    @include('components.nav')

    @include('components.jquery')

    <!-- Carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/banner2.png" class="img-fluid carimg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/banner2.png" class="img-fluid carimg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/banner2.png" class="img-fluid carimg" alt="...">
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


    <div class="container py-4 py-xl-5" data-aos="fade-left">
        <div class="row mx-auto">
            <div class="col-md-8 col-xl-6 text-center ">
                <h1 style="text-align: left;" class="indexTitle"><span class="p">I</span>ndustrial Machinery And Process
                    Automation</h1>
                <p class="w-lg-50 indexPee" style="text-align: justify;">Design. Consultation. Implementation.</p>
            </div>
        </div>
        <hr style="margin-bottom:8rem;">
        <div class="headerTitle" id="inexpertise">
            <h3>Expertise</h3>

        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3 ">
            <div class="col hoverExpCard">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;"
                        src="/img/Industry 4.0.jpg">
                    <div class="hoverExpTitle">
                        <h3>Industry 4.0 Industrial IoT for smart manufacturing</h3>
                    </div>
                </div>

            </div>
            <div class="col hoverExpCard">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="/img/Batch.jpg">
                    <div class="hoverExpTitle">
                        <h3>Batch and Continuous Process Automation</h3>
                    </div>
                </div>

            </div>
            <div class="col hoverExpCard">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="/img/SS.jpg">
                    <div class="hoverExpTitle">
                        <h3>Industrial Automation Safety Integrated Systems for Rockwell & Siemens Control Systems</h3>
                    </div>
                </div>

            </div>
            <div class="col hoverExpCard">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;"
                        src="/img/OEM machines.png">
                    <div class="hoverExpTitle">
                        <h3>OEM Programming System Integrating & Commissioning For Food and Beverage Manufacturing
                            Machines</h3>
                    </div>
                </div>

            </div>
            <div class="col hoverExpCard">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="/img/DI.jpg">
                    <div class="hoverExpTitle">
                        <h3>Design, Consultation & Implementation For Automation Projects</h3>
                    </div>
                </div>

            </div>
            <div class="col hoverExpCard">
                <a href="/expertise">
                    <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;"
                            src="/img/Upgrades.jpg">
                        <div class="hoverExpTitle">
                            <h3>Upgrades of legacy control systems & obsolescence</h3>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="headerTitle" id="tech">
            <h3>Technologies</h3>

        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;"
                        src="/img/Machine Vision.jpg">
                    <div class="py-4">
                        <h4>Motion Control And Motors</h4>

                    </div>
                </div>
            </div>
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;"
                        src="/img/visual.jpg">
                    <div class="py-4">
                        <h4>Control & Visualization</h4>

                    </div>
                </div>
            </div>
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;"
                        src="/img/sensor.jpg">
                    <div class="py-4">
                        <h4>Sensors & Plant Components</h4>

                    </div>
                </div>
            </div>
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="/img/net.jpg">
                    <div class="py-4">
                        <h4>Networking & MES</h4>

                    </div>
                </div>
            </div>
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="/img/robot.jpg">
                    <div class="py-4">
                        <h4>Robotics</h4>

                    </div>
                </div>
            </div>
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;"
                        src="/img/automation.jpg">
                    <div class="py-4">
                        <h4>Automation</h4>

                    </div>
                </div>
            </div>
        </div>


    </div>


    @include('components.footer')
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>

    </script>


    @include('components.navJquery')
</body>

</html>