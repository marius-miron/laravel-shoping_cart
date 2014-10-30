@extends('layout')

@section('content')
    <div class="container">
            <div class="row">
                <form role="form" action="" class="form-signin" method="POST">
                    <h2 class="form-signin-heading">Please sign in</h2>                    
                    
                     <div class="row placeholders">
                     </div>       
                    <input type="text" autofocus="" required="" name="email" placeholder="Email" class="form-control">
                    <input type="password" required="" name="password" placeholder="Password" class="form-control">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                    <a href="/register" class="btn btn-success btn-lg btn-block" role="button">Register</a>
                </form>
            </div>
        </div>    
@stop

