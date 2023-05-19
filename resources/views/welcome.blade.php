<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row mt-5 justify-content-end">
                <div class="col-8">
                    <a href="{{ route('user.login') }}" class="btn btn-success">User Login</a>
                    <a href="{{ route('admin.login') }}" class="btn btn-success">Admin Login</a>
                </div>
            </div>
        </div>
    </body>
</html>
