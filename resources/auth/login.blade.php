@extends('layouts.auth')
@section('title','Iniciar sesión')
@section('content')
    <div class="row">
        <div class="col-xs-10 col-sm-8 col-md-4 col-lg-4  col-xs-offset-1  col-sm-offset-2 col-md-offset-4 col-lg-offset-4 divlogin">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>¡Vaya! </strong> Hubo problemas con los campos:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">
                        <div class="input-group">
                            <span class="input-group-addon" id="usuario"><i class="fa fa-user"></i></span>
                            <input type="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="Email"
                                       value="{{ old('email') }}">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="password"><i class="fa fa-unlock-alt"></i></span>
                            <input type="password"
                                       class="form-control"
                                       placeholder="Contraseña" 
                                       name="password">
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 text-center">
                                <a href="{{ route('auth.password.reset') }}">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="col-md-6 text-center">
                                <label>
                                    <input type="checkbox"
                                           name="remember"> Recuérdame
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit"
                                        class="btn btn-itslp"
                                        style="margin-right: 15px;">
                                    Entrar
                                </button>
                            </div>
                        </div>
                    </form>
                
    </div>
</div>
<!-- end contenedor principal -->
                    <footer class="container-fluid">
                <div class="container">
                    <div class="row logo_footer">
                        <img src="{{ url('img/logo_footer.png') }}" alt="logo footer" width="201" height="auto" border="0" /> 
                    </div>
                </div>  
            </footer>
                <!-- end footer --> 
@endsection