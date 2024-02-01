@extends('auth.layouts.main')

@section('head')
<title>Accesos</title>
@endsection

@section('content')


<div id="wrapper" class="wrapper">
    <div class="fxt-template-animation fxt-template-layout5">
        <div class="fxt-bg-img fxt-none-767" data-bg-image="assets-login/img/figure/bg5-l.jpg">
            <div class="fxt-intro">
                <div class="sub-title">Bienvenido</div>
                <h1>Adminitración transportegya</h1>
                <p>Podras revisar todo el estado actula de la empresa.</p>
            </div>
        </div>
        <div class="fxt-bg-color">
            <div class="fxt-header">
                <a href="/" class="fxt-logo"><img src="{{ asset('images/logo.png') }}" alt="Logo" width="100px;"></a>
                <div class="fxt-page-switcher">
                    <a href="login-5.html" class="switcher-text switcher-text1 active">LogIn</a>
                    <a href="register-5.html" class="switcher-text switcher-text2" disabled>Register</a>
                </div>
            </div>
            <div class="fxt-form">
          
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group fxt-transformY-50 fxt-transition-delay-1">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <i class="flaticon-envelope"></i>
                    </div>
                    <div class="form-group fxt-transformY-50 fxt-transition-delay-2">

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <i class="flaticon-padlock"></i>
                        <a href="{{ route('password.request') }}" class="switcher-text3">Olvidaste tu contraceña</a>
                    </div>
                    <div class="form-group fxt-transformY-50 fxt-transition-delay-3">
                        <div class="fxt-content-between">
                            <button type="submit" class="fxt-btn-fill">Acceder</button>
                            <div class="checkbox">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox1">Recuerdamelo</label>
                            </div>
                        </div>
                    </div>
                </form>
                @if ($message = Session::get('success'))
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @endif
            </div>
            <div class="fxt-footer">
                <ul class="fxt-socials">
                    <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-5"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="fxt-google fxt-transformY-50 fxt-transition-delay-7"><a href="#" title="google"><i class="fab fa-google-plus-g"></i></a></li>
                    <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-9"><a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection