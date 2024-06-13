@extends('layouts.without')

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

<section class="vh-100" style="background-color: #6C7A89;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{route('login.auth')}}" method="post">
                  @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Acessar sua conta</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="login_nome">Nome do usuario</label>
                    <input type="text" id="login_nome" class="form-control form-control-lg" name="nome" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="login_senha">Senha</label>
                    <input type="password" id="login_senha" class="form-control form-control-lg" name="password" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="login_cargo">Cargo</label>
                    <input type="text" id="login_cargo" class="form-control form-control-lg" name="cargo" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Login</button>
                  </div>


                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection