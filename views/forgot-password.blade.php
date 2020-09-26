@extends('fortify-uikit::layout')

@section('content')
    @if (session('status'))
        <div class="uk-alert-success" uk-alert>
            {{ session('status') }}
        </div>
    @endif

    <div class="uk-card uk-card-default uk-margin-top">
        <div class="uk-card-header">
            <h3 class="uk-card-title">{{ __('Reset Password') }}</h3>
        </div>

        <div class="uk-card-body">
            <form class="uk-form-horizontal" role="form" method="POST"
                  action="{{ route('password.email') }}">
                @csrf

                <div class="uk-margin">
                    <label for="email" class="uk-form-label">{{ __('E-Mail Address') }}</label>

                    <div class="uk-form-controls">
                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                               class="uk-input uk-form-width-large{{ $errors->has('email') ? ' uk-form-danger' : '' }}">

                        @if ($errors->has('email'))
                            <div class="uk-form-help-block uk-text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <div class="uk-form-controls">
                        <button type="submit" class="uk-button uk-button-primary">
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
