<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        .card {
            margin-top: 250px;
        }
    </style>
</head>
<body class="">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/tweet" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="mt-2" for="tweet">Tweet:</label>
                            <textarea type="text" class="form-control mt-2" id="tweet" name="tweet" placeholder="Enter your tweet here" ></textarea>
                        </div>
                        <button type="submit" class="btn mt-2 btn-primary">Send tweet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

