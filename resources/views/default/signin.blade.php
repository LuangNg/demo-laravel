@extends('default/app')

@section('title', 'Sing In Page')

@section('styles')
<!-- the preferred alternate style sheet -->
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" title="Bootstrap CSS">
<link rel="stylesheet" href="{{ asset('assets/normalize.css') }}" title="Reset CSS">
@endsection

@section('content')
<div class="panel-bg center-block">
    <div id="loginPanel" class="col-xs-12 col-lg-4">
        <form action="auth/signIn" method="post" class="" id="signinForm" name="signinForm">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="panel-heading"><h3>Sign In</h3></div>

            <div class="panel-body">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="account" class="form-control input-md txt-input" name="account" data-trigger="focus" value="" data-toggle="tooltip" placeholder="username" data-placement="right" title="Please input your username!" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="password" id="password" class="form-control input-md txt-input" name="password" value="" placeholder="password" />
                    </div>
                </div>

                <div class="form-group form-inline">
                    <div class="input-group">
                        <input type="text" id="captcha" class="form-control input-md txt-input" name="captcha" value="" placeholder="captcha" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input id="remember-me" type="checkbox" value="" />Remember me
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary input-md" value="Sign in" />
                </div>

                <div class="form-group">
                    <a href="javascript:void(0);">Forget password?</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
@endsection         