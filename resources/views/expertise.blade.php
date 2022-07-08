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
    @foreach($expertises as $expertise)
    <div class="container py-4 py-xl-5" style="background: var(--bs-secondary);color: var(--bs-white);">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;"
                        src="{{$expertise->directory}}"></div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div style="max-width: 350px;">
                    <h2 class="text-uppercase fw-bold">{{$expertise->title}}</h2>
                    <p class="my-3">{{$expertise->description}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @include('components.footer')
    <script src="expertiseAssets/bootstrap/js/bootstrap.min.js"></script>
    @include('components.jquery')
    @include('components.navJquery')
</body>

</html>