

@extends('layouts.adm.app')

<body>

    <div class="container">
        <div class="row">
            <div class="section"></div>
            <main>
                <center>
                    <div class="container">
                        <div  class="z-depth-3 y-depth-3 x-depth-3 grey lighten-4 row" style="background: #FFFFFF !important; display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; solid #EEE; width: 470px ">
                            <div class="section">
                                <img src='{{ asset("images/logos/".$logos->file_image) }}' alt="">
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="username" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                        <div class="col-md-6">
                                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                            @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary" id="btn_login">
                                                {{ __('INGRESAR') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </center>
            </main>
        </div>
    </div>
</body>
</html>