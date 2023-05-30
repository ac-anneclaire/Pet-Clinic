@extends('layout.master')

@section('content')
<body>
    <div class="form">
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <h1 class="h3 mb-3 fw-normal">Registration Form</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name" required="required">
            <label for="floatingName">Full Name</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('client_name') }}</span>
            @endif
        </div>

        
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required">
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

   
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="btn" type="submit">Register</button>
        
    </form>
    </div>
</body>
<style>
    .form {
        margin: 20px;
    }
    body {
        background-image: url(img/pawclaws.png);
        background-repeat: no-repeat;
        background-position-x: 110%;
        background-position-y: 100%;
        background-size: 60%;
    }
    .form-group {
        width: 50%;
    }
    .btn {
        width: 10%;
        margin-left: 20%;
    }

</style>
@endsection