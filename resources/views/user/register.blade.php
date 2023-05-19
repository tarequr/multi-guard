<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

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
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <a href="{{ url('/') }}">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="img-fluid" alt="Phone image">
                        </a>
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h2 class="text-center">User Register</h2>

                    <form action="{{ route('user.create') }}" method="POST">
                        @csrf

                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" placeholder="Enter name"/>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="Enter email"/>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Enter password"/>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Confirm Password</label>
                            <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Re-Type password"/>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted"><span>Have an account? <a href="{{ route('user.login.view') }}">login</a></span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
