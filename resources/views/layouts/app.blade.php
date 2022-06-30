<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
	html, body {
		height: 100%;
	}
	body {
		font-family: 'Roboto', sans-serif;
	}
	.demo-container {
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.btn-lg {
		padding: 12px 26px;
		font-size: 14px;
		font-weight: 700;
		letter-spacing: 1px;
		text-transform: uppercase;
	}
	::placeholder {
	font-size:14px;
	letter-spacing:0.5px;
	}
	.form-control-lg {
		font-size: 16px;
		padding: 25px 20px;
	}
	.font-500{
	font-weight:500;	
	}
	.image-size-small{
	width:140px;
	margin:0 auto;	
	}
	.image-size-small img{
	width:140px;
	margin-bottom:-70px;	
	}
	.icon-camera{
	position: absolute;
    right: -1px;
    top: 21px;
    width: 30px;
    height: 30px;
    background-color: #FFF;
    border-radius: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
	}
    </style>
</head>
<body>
    <div id="app">  
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>