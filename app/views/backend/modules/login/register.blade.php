<!DOCTYPE html>
<html>
	<head>
		<title>Psarnetwork-Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ URL::asset('backend/melon/assets/css/login.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('backend/melon/assets/css/responsive.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('backend/melon/assets/css/plugins.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('backend/melon/assets/css/icons.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('backend/melon/bootstrap/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('backend/melon/assets/css/main.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('backend/melon/assets/css/fontawesome/font-awesome.min.css') }}">
		<!--[if IE 7]><link rel="stylesheet" href="{{ URL::asset('backend/melon/assets/css/fontawesome/font-awesome-ie7.min.css') }}"><![endif]-->
		<!--[if IE 8]><link href="{{ URL::asset('backend/melon/assets/css/ie8.css') }}" rel="stylesheet" type="text/css"/><![endif]-->
		<link href="{{ URL::asset('//fonts.googleapis.com/css?family=Open+Sans:400,600,700') }}" rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="{{ URL::asset('backend/melon/assets/js/libs/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('backend/melon/bootstrap/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('backend/melon/assets/js/libs/lodash.compat.min.js') }}"></script>
		<!--[if lt IE 9]><script src="{{ URL::asset('backend/melon/assets/js/libs/html5shiv.js') }}"></script><![endif]-->
		<script type="text/javascript" src="{{ URL::asset('backend/melon/plugins/uniform/jquery.uniform.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('backend/melon/plugins/validation/jquery.validate.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('backend/melon/plugins/nprogress/nprogress.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('backend/melon/assets/js/login.js') }}"></script>
		<script>$(document).ready(function(){Login.init()});</script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body class="login">
		<div class="logo"> <img src="{{ URL::asset('backend/melon/assets/img/logo.png') }}" alt="logo"/> <strong>SRUOL</strong>9 </div>
		<div class="box">
		  <div class="content">

		    <form class="form-vertical register-form" action="{{URL::to('register')}}" method="post">
		    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		      <h3 class="form-title">Sign Up for Free</h3>
		      <div class="form-group">
		        <div class="input-icon"> <i class="icon-user"></i>
		          <input type="text" name="email" class="form-control" placeholder="Username/ Email/ Phone" autofocus data-rule-required="true"/>
		          <span class="class-error">{{$errors->first('email')}}</span>
		        </div>
		      </div>
		      <div class="form-group">
		        <div class="input-icon"> <i class="icon-lock"></i>
		          <input type="password" name="password" class="form-control" placeholder="Password" id="register_password" data-rule-required="true"/>
		          <span class="class-error">{{$errors->first('remember_password')}}</span>
		        </div>
		      </div>
		      <div class="form-group">
		        <div class="input-icon"> <i class="icon-ok"></i>
		          <input type="password" name="password_confirm" class="form-control" placeholder="Confirm Password" data-rule-required="true" data-rule-equalTo="#register_password"/>
		          <span class="class-error">{{$errors->first('password')}}</span>
		        </div>
		      </div>
		      <div class="form-group">
				<label for="TypeText">
					{{trans('register.Input_Type_Text')}}
				</label>
				<div class="form-inline">
					<div class="col-md-7 text-left" style="padding-right: 0px;padding-left: 0px;">
                    	<div class="pull-left">{{HTML::image(Captcha::img(), 'Captcha image') }}</div>
					</div>
					<div class="col-md-5 text-right" style="padding-right: 0px;padding-left: 0px;">
                        {{Form::text('captcha',null, array('class'=>'form-control pull-right', 'size'=>'10', 'maxlength'=>'6','required'=>'required'))}}
					</div>
					<div class="col-md-12">{{$errors->first('captcha')}}</div>
				</div>
			</div>
		      <div class="form-group spacing-top">
		        <label class="checkbox">
		          <input type="checkbox" class="uniform" name="remember" data-rule-required="true" data-msg-required="Please accept ToS first.">
		          I agree to the <a href="javascript:void(0);">Terms of Service</a></label>
		        <label for="remember" class="has-error help-block" generated="true" style="display:none;"></label>
		      </div>
		      <div class="form-actions">
		        <button type="button" class="back btn btn-default pull-left"> <i class="icon-angle-left"></i> Back</i> </button>
		        <button type="submit" value="register" name="btnRegister" class="submit btn btn-primary pull-right"> Sign Up <i class="icon-angle-right"></i> </button>
		      </div>
		    </form>
		  </div>
		</div>
	</body>
</html>