<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/front/style.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container">
        <div class="row clearifix">
            <div class="col-md-6 social-share">
                <h1 class="text-primary font-weight-bold">UpworkBD</h1>
                <h4>For your better future, you need to hard work !</h4>
            </div>
            <div class="col-md-6 form bg-white p-3">
                <form class="p-4" id="signup" action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control p-2" id="name" aria-describedby="emailHelp" placeholder="Username" name="name"  value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control p-2" id="email1" aria-describedby="emailHelp" placeholder="Email" name="email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control p-2" id="password1" aria-describedby="emailHelp" placeholder="Password" name="password" value="{{ old('password') }}"><i class="glyphicon glyphicon-eye-open"></i>
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                    </div>
                    <button id="logIn" type="submit" class="btn btn-primary form-control p-2">Sign Up</button>
                </form>
                <hr>
                <p class="text-center">Already Have an account <a href="{{ url('/signin') }}">Sign in</a> now</p>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('public/js/bootstrap/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap/jquery.validate.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#signup").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                name: "Please enter your name",
                email: "Please enter a valid email address",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                }
            }
        });
    });
</script>
</html>
