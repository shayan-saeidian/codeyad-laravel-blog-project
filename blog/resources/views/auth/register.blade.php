<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>قالب Nextable - قالب مدیریتی نکستیبل</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('panel/assets/media/image/favicon.png')}}">

    <!-- Theme Color -->
    <meta name="theme-color" content="#5867dd">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ url('panel/vendors/bundle.css') }}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{url('panel/assets/css/app.css')}}" type="text/css">
</head>


<body class="form-membership">

	<!-- begin::page loader-->
	<div class="page-loader">
		<div class="spinner-border"></div>
	</div>
	<!-- end::page loader -->

	<div class="form-wrapper">

		<!-- logo -->
		<div class="logo">
            <img src="{{url('panel/assets/media/image/logo-sm.png')}}" alt="image">
		</div>
		<!-- ./ logo -->

		<h5>ایجاد حساب</h5>
        @include('auth.errors')
		<!-- form -->
		<form method="POST" action="{{route('register')}}">
            @csrf
			<div class="form-group">
				<input name="name" type="text" class="form-control" placeholder="نام و نام خانوادگی"  autofocus>
			</div>
			<div class="form-group">
				<input name="email"  type="email" class="form-control text-left" placeholder="ایمیل" dir="ltr" >
			</div>
			<div class="form-group">
				<input name= "password" type="password" class="form-control text-left" placeholder="رمز عبور" dir="ltr" >
			</div>
            <div class="form-group">
                <input name= "password_confirmation" type="password" class="form-control text-left" placeholder="تکرار رمز عبور" dir="ltr" >
            </div>
			<button type="submit" class="btn btn-primary btn-block">ثبت نام</button>
			<hr>
			<p class="text-muted">حساب کاربری دارید؟</p>
			<a href="{{route('login')}}" class="btn btn-outline-light btn-sm">وارد شوید!</a>
		</form>
		<!-- ./ form -->

	</div>

	<!-- Plugin scripts -->
    <script src="{{url('panel/vendors/bundle.js')}}"></script>

    <!-- App scripts -->
    <script src="{{url('panel/assets/js/app.js')}}"></script>
</body>

</html>
