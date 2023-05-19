<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
</head>

<body>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-md-12">
                    <h3 class="text-center">Welcome to User Dashboard</h3>

                    <a class="btn btn-sm btn-warning float-right" href="{{ route('user.logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-power text-danger"></i>{{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
