@extends('layouts.app')

@section('title','Login')

@section('content')

@if($mensagem = Session::get('erro'))
{{$mensagem}}
@endif
@if($errors->any())
@foreach($errors->all() as $error)
{{$error}} <br>
@endforeach
@endif
<div class="sidenav">
  <div class="login-main-text">
    <h2>Teste<br> Login Page</h2>
    <p>Login or register from here to access.</p>
  </div>
</div>
<div class="main">
  <div class="col-md-6 col-sm-12">
    <div class="login-form">
      <form action="{{route('login.auth')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="nome">Usuario</label>
          <input type="text" class="form-control" placeholder="User Name" name="nome">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-black">Login</button>
      </form>
    </div>
  </div>
</div>

@endsection