@extends('layouts.auth')
@section('title','Restablecer la contraseña')
@section('content')
    <div class="row">
        <div class="col-xs-10 col-sm-8 col-md-4 col-lg-4  col-xs-offset-1  col-sm-offset-2 col-md-offset-4 col-lg-offset-4 divlogin">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were problems with input:
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
                          action="{{ url('password/email') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                         <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="Correo electrónico" 
                                       value="{{ old('email') }}">
                            </div>
                            <div style="clear:both;">&nbsp;</div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit"
                                        class="btn btn-itslp"
                                        style="margin-right: 15px;">
                                    @lang('global.app_reset_password')
                                </button>
                            </div>
                        </div>
                    </form>
    </div>

@endsection
