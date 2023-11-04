@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')

<<<<<<< HEAD
<head>
	<title>Inicio de Sesión</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/CodeWave2.png" class="brand_logo" alt="Logo-Codewave">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action= "{{route('login')}}" method="POST">
=======
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="assets/styleslogin.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
            integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    </head>

    <body>
        <div class="container h-100 mx-auto shadow-lg" style="background-color: white">
            <div class="sm:py-16 m-4 justify-center items-center">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold">Inicio de Sesión</h2>

                    <form class="mt-4" action= "{{ route('login') }}"method="post">
>>>>>>> 1344912003c08a7dfcd20de5619ccd4b8bb13019
                        @csrf
                        <div class="input-group mt-4">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="correo" class="form-control input_user" value=""
                                placeholder="Correo electrónico">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="contrasena" class="form-control input_pass" value=""
                                placeholder="Contraseña">
                        </div>
                        <div class="d-flex justify-content-center mt-4 login_container">
                            <button type="submit" name="button" class="btn login_btn">Entrar</button>
                        </div>
                        @if (session('message'))
                            <div class="alert alert-danger mt-4" style="background-color: #ff8a80; color:white">
                                <p>Corrige los siguientes errores:</p>
                                <ul>
                                    <li>{{ session('message') }}</li>
                                </ul>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger mt-4" style="background-color: #ff8a80; color:white">
                                <p>Corrige los siguientes errores:</p>
                                <ul>
                                    @foreach ($errors->all() as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach

                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@endsection
