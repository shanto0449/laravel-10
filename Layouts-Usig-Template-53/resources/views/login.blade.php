@extends('layout')

@section('title','This is login page')

@section('main')
<div class="main">
    <h1>User Login</h1>
    <form action="" method="get">
        <input type="text" placeholder="Enter name">
        <br><br>
        <input type="password" placeholder="Enter Password">
        <br><br>
        <button type="button" class="btn btn-danger">Login</button>


    </form>
</div>
@endsection
