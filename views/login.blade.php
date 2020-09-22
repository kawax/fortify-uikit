@extends('fortify-uikit::layout')

@section('content')
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-margin-top">
            <div class="uk-card-header">
                <h3 class="uk-card-title">{{ __('Login') }}</h3>
            </div>

            <div class="uk-card-body">
                <form class="uk-form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="uk-margin">
                        <label for="email" class="uk-form-label">{{ __('E-Mail Address') }}</label>

                        <div class="uk-form-controls">
                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                   class="uk-input uk-form-width-large{{ $errors->has('email') ? ' uk-form-danger' : '' }}">

                            @if($errors->has('email'))
                                <div class="uk-form-help-block uk-text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="password" class="uk-form-label">{{ __('Password') }}</label>

                        <div class="uk-form-controls">
                            <input id="password" type="password" name="password"
                                   class="uk-input uk-form-width-large{{ $errors->has('password') ? ' uk-form-danger' : '' }}">

                            @if ($errors->has('password'))
                                <div class="uk-form-help-block uk-text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div class="uk-form-controls uk-form-controls-text">
                            <label>
                                <input type="checkbox" name="remember" class="uk-checkbox">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <button type="submit" class="uk-button uk-button-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="uk-button uk-button-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
