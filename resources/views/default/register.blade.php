@extends('default/app')

{{-- All CSS files should put here --}}
@section('styles')
<!-- the preferred alternate style sheet -->
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}" title="Bootstrap CSS">
@endsection

{{--Main
    Content--}}
@section('content')
<form action="auth/register" method="post" name="regist-by-email">
    <input type="hidden" name="_token" value="{{ csrf_token()}}" />
    <div class="form-group has-success has-feedback">
        <input type="text" class="form-control input-lg bs-docs-popover txt-input" data-trigger="focus" data-container="body" id="username" name="username" placeholder="User Name" data-toggle="popover" data-placement="right" title="Msg" data-content="Please input username!" />
        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg bs-docs-popover txt-input" data-trigger="focus" data-container="body" id="password" name="password" placeholder="Password" ng-minlength="8" ng-maxlength="20" data-toggle="popover" data-placement="right" title="Tip" data-content="Password need at least 8 charactors!" />
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg bs-docs-popover txt-input" data-trigger="focus" data-container="body" id="confirmPassword" name="confirmPassword" placeholder="Comfirm Password" data-toggle="popover" data-placement="right" title="Msg" data-content="New password must be the same with confirm password" />
    </div>
    <div class="form-group has-error has-feedback">
        <input type="text" class="form-control input-lg bs-docs-popover txt-input" data-trigger="focus" data-container="body" name="email" id="email" placeholder="E-mail Address" data-toggle="popover" data-placement="right" title="tip" data-content="Your email address" />
        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group has-feedback">
        <label class="control-label sr-only" for="inputGroupSuccess4">Input group with success</label>
        <div class="input-group">
            <input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
        </div>
        <span class="glyphicon glyphicon-eye-open form-control-feedback" aria-hidden="true"></span>
        <span id="inputGroupSuccess4Status" class="sr-only">(success)</span>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="agreement" name="agreement" value="1" />I accept the promtion<a href="###">《xxx Service Protocol》</a>
        </label>
    </div>
    <div class="regist-way">                                   
        <input type="submit" id="submit" class="btn btn-primary btn-lg btn-block" value="Register Now" />
    </div>
</form>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/angular.min.js')}}"></script>
<script type="text/javascript" src="./js/register.js"></script>
@endsection
