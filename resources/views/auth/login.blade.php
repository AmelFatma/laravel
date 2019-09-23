@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login-form">
    <form action="/login" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            
            <a href="#" class="pull-right">Forgot Password?</a>
     
</div>
@endsection
