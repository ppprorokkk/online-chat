@extends('layouts.main')
@section('title','login')
@section('main')




<div class="container">
 <div class="row">

 <div class="col-md-offset-3 col-md-6">
 <form class="form-horizontal" action="/log" method="post">
    {{ csrf_field() }}
 <span class="heading">АВТОРИЗАЦИЯ</span>
 <div class="form-group">
 <input type="email" name="email" class="form-control" id="inputEmail" placeholder="E-mail">
 <i class="fa fa-user"></i>
 </div>
 <div class="form-group help">
 <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">

 </div>
 <div class="form-group">
 <div class="main-checkbox">
 <a href="/reg" class="btn btn-default">Регистрация</a>
 </div>
 
 <button type="submit" class="btn btn-default" style="float: right;">ВХОД</button>
 </div>
 </form>
 @if ($errors->any())
 <div class="alert alert-danger">
     <ul>
         {{$errors->all()[0]}}
     </ul>
 </div>
@endif
 </div>

 </div><!-- /.row -->
</div><!-- /.container -->
@endsection