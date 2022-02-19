@extends('templates.base')
@section('title', 'Login')

@push('styles')
<style>
body {
  min-height: 100vh;
 
  background-color: #41b8b6;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%2341B8B6'/%3E%3Cstop offset='1' stop-color='%23CDFFFD'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1'%3E%3Cstop offset='0' stop-color='%2341B8B6' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%2341B8B6' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2'%3E%3Cstop offset='0' stop-color='%2341B8B6' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%2341B8B6' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
}

.containerLogin {
  max-width: 500px;
  margin: auto;
  margin-top: 10vh;
  border-radius: 5px;
  padding: 20px;
}
.labelCheck, .form-group label{
  color: white;
}
.form-group label{
  margin: 15px 15px 15px 0px;
}

.form-group input {
  border: none !important;
  border-radius: 200px !important;
  color: #3d3d3d;
  height: 40px !important;
  padding-left: 20px;
  -webkit-box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
          box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
}

.botaoLogin {
  margin-top: 20px;
  width: 100%;
  background-color: #41b8b6c2 !important;
  border: none !important;
  border-radius: 200px !important;
  margin-bottom: 15px !important;
  -webkit-box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
          box-shadow: 2px 2px 1px 0.2rem #41b8b63a !important;
}

.linkLogin {
text-decoration: none !important;
color: #41b8b6c2;
}

.linkLogin:hover {
color: #187271c2;
}
.alinhamento {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 100%;
}

.iconLogin {
  width: 26px;
  margin-right: 10px;
  margin-bottom: 4px;
}

.logoSite {
  width: 130px;
  -webkit-filter: contrast(0%) brightness(500%);
          filter: contrast(0%) brightness(500%);
  margin-bottom: 20px;
  position: relative;
}
.form-check-input:checked {
    background-color:#41b8b6c2;
    border-color:#41b8b6c2;

}
.form-check-input[type=checkbox]{
  border-radius:30px;
}
.form-check{
  padding-top:20px;
}
</style>
@endpush

@section('content')

<div class = "containerLogin">
        <div class = "alinhamento"><img class = "logoSite" src="{{asset('Imagens/cat.svg')}}"/></div>

        <!---------------------------- Form de login ------------------------------->

        @if (session('erro'))
    
        <!-- Erro -->
        <div class="alert alert-danger" role="alert">
        {{ session('erro') }}
        </div>

        @endif

        <form method="post" action="{{ route('login') }}">
          @csrf
            <div class="form-group">
                
              <label for="exampleInputEmail1"><img class = "iconLogin" src="{{asset('Imagens/email.svg')}}"/>Email</label>

              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><img class = "iconLogin" src="{{asset('Imagens/lock2.svg')}}">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder="Password">
            </div>

            <div class="form-check">
              <input class="form-check-input" name="lembrar" type="checkbox" value="remember-me" id="">
              <label class="form-check-label labelCheck" for="flexCheckDefault">
                Lembrar Usuário
              </label>
            </div>
            
            <button type="submit" class="btn btn-primary botaoLogin">Entrar</button>
            
            <div class = "alinhamento"><a class = "linkLogin" href = "{{ route('usuarios.cadastro') }}">Não possui cadastro?</a></div>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>