<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetlogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetlogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetlogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assetlogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assetlogin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{url('assetlogin/images/3180.png')}}" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
          {{csrf_field()}}
					<span class="login100-form-title">
						REGISTER
					</span>
          <div class="wrap-input100 validate-input{{ $errors->has('name') ? ' has-error' : '' }}" data-validate = "Valid name is required: ex@abc.xyz">
						<input class="input100" type="text" name="name" value="{{ old('name') }}" required id="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
					</div>

          <div class="wrap-input100 validate-input{{ $errors->has('nis') ? ' has-error' : '' }}" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="nis" value="{{ old('nis') }}" required id="nis" placeholder="NIS">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card-o" aria-hidden="true"></i>
						</span>
            @if ($errors->has('nis'))
                <span class="help-block">
                    <strong>{{ $errors->first('nis') }}</strong>
                </span>
            @endif
					</div>

					<div class="wrap-input100 validate-input{{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" value="{{ old('email') }}" required id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
					</div>

					<div class="wrap-input100 validate-input{{ $errors->has('password') ? ' has-error' : '' }}" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" required placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
           @endif
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input id="password-confirm" type="password" class="input100" name="password_confirmation" placeholder="Password Confirmation" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Gender is required">
            <select class="input100" name="kelas">
              <option value="">KELAS</option>
              <option value="XIII-AK 1">XIII-AK 1</option>
              <option value="XIII-AK 2">XIII-AK 2</option>
              <option value="XIII-AK 3">XIII-AK 3</option>
              <option value="XIII-AK 4">XIII-AK 4</option>
              <option value="XIII-AK 5">XIII-AK 5</option>
              <option value="XIII-AK 6">XIII-AK 6</option>
              <option value="XII-RPL 1">XII-RPL 1</option>
              <option value="XII-RPL 2">XII-RPL 2</option>
              <option value="XII-TKJ 1">XII-TKJ 1</option>
              <option value="XII-TKJ 2">XII-TKJ 2</option>
            </select>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-university" aria-hidden="true"></i>
            </span>
          </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/register">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{url('assetlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assetlogin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('assetlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assetlogin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assetlogin/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
