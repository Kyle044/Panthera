<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panthera</title>
    <link rel="stylesheet" href="expertiseAssets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="expertiseAssets/css/Corporate-Footer-Clean.css">
    <link rel="stylesheet" href="expertiseAssets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="expertiseAssets/css/Projects-Grid.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    @include('components.nav')


    <div class="container py-4 py-xl-5" style="background: var(--bs-secondary);color: var(--bs-white);">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;"
                        src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div style="max-width: 350px;">
                    <h2 class="text-uppercase fw-bold">Biben dum<br>fringi dictum, augue purus</h2>
                    <p class="my-3">Tincidunt laoreet leo, adipiscing taciti tempor. Primis senectus sapien, risus donec
                        ad
                        fusce augue interdum.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div
                class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                <div style="max-width: 350px;">
                    <h2 class="text-uppercase fw-bold">Biben dum<br>fringi dictum, augue purus</h2>
                    <p class="my-3">Tincidunt laoreet leo, adipiscing taciti tempor. Primis senectus sapien, risus donec
                        ad
                        fusce augue interdum.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;"
                        src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="text-center text-white-50 bg-primary border rounded border-0 p-3"
            style="background: var(--bs-red);">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-white mb-0">123+</h4>
                        <p class="mb-0">Erat netus</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-white mb-0">45+</h4>
                        <p class="mb-0">Erat netus</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-white mb-0">67+</h4>
                        <p class="mb-0">Erat netus</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-white mb-0">89</h4>
                        <p class="mb-0">Erat netus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
    <script src="expertiseAssets/bootstrap/js/bootstrap.min.js"></script>



    @include('components.jquery')








    @include('components.navJquery')
</body>

</html>