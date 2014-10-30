@extends('layout')

@section('content')
    <div class="container">
            
            <form role="form" action="" class="form-signin" method="POST">
                <h2 class="form-signin-heading">Please register with us</h2>
                <div class="alert alert-danger"></div>
                <input type="text" autofocus="" required="" name="email" placeholder="Email" class="form-control has-success has-error">
                <input type="password" required="" name="password" placeholder="Password" class="form-control has-success has-error">
                <input type="password" required="" name="password2" placeholder="Confirm password" class="form-control has-success has-error">
                               
                <button type="submit" class="btn btn-lg btn-success btn-block ">Create account</button>
            </form>

        </div>  
@stop