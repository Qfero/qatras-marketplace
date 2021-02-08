@extends('layouts.master')
@section('content')

   <div class="container my-4">
       <div class="row">
            <div class="col-sm-4 mx-auto">
                <form>
                    <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <label for="inputEmail" class="visually-hidden mt-2">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                    <label for="inputPassword" class="visually-hidden mt-4">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                    <div class="checkbox mb-3 mt-4 text-right">
                        <label>
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
            </div>
       </div>
   </div>

@endsection