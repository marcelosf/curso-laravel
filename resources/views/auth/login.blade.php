@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s8 offset-s2 z-depth-2">
                <h3 class="center">Code Financeiro Admin</h3>

                    <form method="POST" action="{{ env('URL_ADMIN_LOGIN') }}">
                        {{ csrf_field() }}
                        <?php $messageError = $errors->has('email') ? "data-error='{$errors->first('email')}'": null?>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="email" id="email" class="validate {{ $messageError? 'invalid': $messageError }}" name="email" value="{{ old('email') }}" required autofocus>
                                <label for="email"{!! $messageError !!}>E-mail</label>
                            </div>
                        </div>


                        <?php $messageError = $errors->has('password') ? "data-error='{$errors->first('password')}'": null?>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="password" id="password" class="validate {{ $messageError? 'invalid': $messageError }}" name="password" value="{{ old('password') }}" required autofocus>
                                <label for="password"{!! $messageError !!}>Senha</label>
                            </div>
                        </div>

                        

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Lembrar</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn" type="submit">Login</button>
                                <a class="btn" href="{{ route('admin.password.request') }}">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
