@extends('base')

@section('title','register')
 @section('content')

 <div class="container">
    <div class="row">

        <div class="col-md-5 mx-auto">

             <h1 class="text-center text-muted md-3 mt-5">Register</h1>
             <p class="text-center text-muted mb-3 mt-5"> Create an account if you don't have one.</p>

        <form method="POST" action="{{ route('register')}}" class="row g-3">
               @csrf

               <div class="col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname')}}" required autocomplete="firstname" autofocus>
                <small class="text-danger fw-bold" id="error-register-firstname"></small>
              </div>

              <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname')}}" required autocomplete="lastname">
                <small class="text-danger fw-bold" id="error-register-lastname"></small>
             </div>

             <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}" required autocomplete="email">
                <small class="text-danger fw-bold" id="error-register-email"></small>
             </div>

             <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required autocomplete="password" value="{{ old('password')}}">
                <small class="text-danger fw-bold" id="error-register-password"></small>
             </div>

             <div class="col-md-6">
                <label for="password-confirm" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" id="password-confirm" name="password-confirm"

                 required autocomplete="password-confirm" value="{{ old('password-confirm')}}">
                <small class="text-danger fw-bold" id="error-register-password-confirm"></small>
             </div>

             <div class="col-md-12">
                <input class="form-check-input" type="checkbox" id="agreeTerms">
                <label class="form-check-label" for="agreeTerms" requiredl> Agree Terms </label> <br>
                <small class="text-danger fw-bold" id="error-register-agreeTerms"></small>
             </div>

             <div class="d-grid gap-2">
                <input class="btn btn-primary" type="button" id="register-user" value="Register">
             </div>

             <p class="text-center text-muted"> Have you already an account? <a href="{{ route('login')}}"> Log in </a></p>













         </form>


        </div>

    </div>
 </div>

 @endsection
