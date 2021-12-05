@extends('layouts.main')
@section('title','signup')
@section('main')
<div class="container">
 <div class="row">

 <div class="col-md-offset-3 col-md-6">
 <form class="form-horizontal" action="/reg" method="post">
    {{ csrf_field() }}
 <span class="heading">РЕГЕСТРАЦИЯ</span>
 <div class="form-group">
 <input type="email" name="email" class="form-control" id="inputEmail" placeholder="E-mail">
 <i class="fa fa-user"></i>
 </div>
 <div class="form-group help">
 <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">

 <a href="/log"  class="btn btn-default" style="float: left; margin-top:  25px;">АВТОРИЗАЦИЯ</a>
 <button type="submit" class="btn btn-default" style="float: right; margin-top: 25px;">ЗАРЕГЕСТРИРОВАТЬСЯ</button>
 
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