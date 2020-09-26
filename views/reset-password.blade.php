@extends('fortify-uikit::layout')

@section('content')
    <div class="uk-card uk-card-default uk-margin-top">
        <div class="uk-card-header">
            <h3 class="uk-card-title">{{ __('Reset Password') }}</h3>
        </div>

        <div class="uk-card-body">
            <form class="uk-form-horizontal" role="form" method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="uk-margin">
                    <label for="email" class="uk-form-label">{{ __('E-Mail Address') }}</label>

                    <div class="uk-form-controls">
                        <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}"
                               class="uk-input uk-form-width-large{{ $errors->has('email') ? ' uk-form-danger' : '' }}">

                        @if ($errors->has('email'))
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
                    <label for="password-confirm" class="uk-form-label">{{ __('Confirm Password') }}</label>

                    <div class="uk-form-controls">
                        <input id="password-confirm" type="password" name="password_confirmation"
                               class="uk-input uk-form-width-large{{ $errors->has('password_confirmation') ? ' uk-form-danger' : '' }}">

                        @if ($errors->has('password_confirmation'))
                            <div class="uk-form-help-block uk-text-danger">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <div class="uk-form-controls">
                        <button type="submit" class="uk-button uk-button-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
