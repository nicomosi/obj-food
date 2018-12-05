@extends('layouts.app')

@section('content')
<div class="lgn-background" style="background-image: url(uploads/slider-law-1.jpg);">
        <div class="lgn-wrapper">
            <div class="lgn-logo text-center">
                <a><img src="images/logo-white.png" alt=""></a>
            </div>
            <div id="login-form" class="lgn-form ">
                <form class="form-vertical" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="lgn-input form-group">
                        <label class="control-label col-sm-12">Email</label>
                        <div class="col-sm-12">
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" id="email" placeholder="Ingresa tu email" value="{{ old('email') }}"autocomplete="off">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="lgn-input form-group">
                        <label class="control-label col-sm-12">Contraseña</label>
                        <div class="col-sm-12">
                            <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Ingresa tu contraseña" autocomplete="off">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="lgn-forgot">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="lgn-submit">
                        <button type="submit" id="lgn-submit" class="btn btn-primary btn-pill btn-lg" name="login">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
