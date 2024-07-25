<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <x-home-nav></x-home-nav>
    <x-carousel></x-carousel>

    <div class="card my-5 product-card">
        <div class="card-body">
            <h3 class="card-title produtos my-5"> Produtos </h3>
        </div>
    </div>

    <livewire:products />


    <div class="card my-5 product-card">
        <div class="card-body">
            <h3 class="card-title produtos my-5"> Ofertas </h3>
        </div>
    </div>

    <livewire:products />

    <div class="card my-5 product-card">
        <div class="card-body">
            <h3 class="card-title produtos my-5"> Principais Categorias </h3>
        </div>
    </div>

    <livewire:products />

    <footer>
        <h3>footer</h3>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
        .row {
            width: 100% !important;
        }

        .produtos {
            text-align: center;
        }

        footer {
            width: auto;
            height: 300px;
            background-color: rgb(70, 68, 68);
            margin-top: 100px;
            text-align: center;
            color: white
        }
    </style>


</body>

</html>
