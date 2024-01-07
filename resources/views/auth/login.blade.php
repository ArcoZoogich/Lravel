@extends('base')

@section('title','login')
 @section('content')

<div class="container">

    <div class="row">

    <div class="col-md-3 mx-auto">

         <h1 class="text-center text-muted mb-10 mt-5"> Please sign up</h1>
         <p class="text-center text-muted md-5 mt-6"> You articles are waiting for you</p>


        <form method="POST"  action="{{ route('login')}}"> @csrf

        @error('email')
        <div class="alert alert-danger" role="alert" >
            {{ $message }}
        </div>
        @enderror

        @error('password')
        <div class="alert alert-danger" role="alert" >
            {{ $message }}
        </div>
        @enderror


        <label for="email">Email</label>
        <input type="email" name="Email" id="email" required class="form-control mb-3 @error('email') is-inavlid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control mb-3 @error('password') is-inavlid @enderror" autocomplete="current-password" required >

        <div class="row">

            <div class="col-md-6 mb-3">
                <div class="form-check form-switch ">

                    <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember" {{ old('remember')? 'checked' : ''}}>
                    <label class="form-check-label" for="remember"> remember me </label>

                </div>
            </div>

        <div class="col-md-6 text-end" >
                    <a href="#"> Forgot password?</a>
        </div>
        </div>

         <div class="d-grid gap-2">
                    <input class="btn btn-primary" type="submit" value="send">
         </div>
          <p class="text-center text-muted mt-5"> Not registered yet? <a href="{{ route('register') }}"> create an account</a> </p>

        </form>

    </div>
    </div>

</div>

 @endsection
