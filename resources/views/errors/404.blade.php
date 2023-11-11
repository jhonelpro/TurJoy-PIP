<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="">Not found</title>
    <style>
    body,
    html {
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: rgba(255, 130, 45, 0.85);
    font-family: 'Montserrat', sans-serif;
    color: #fff
    }

    html {
    background: url('https://static.pexels.com/photos/818/sea-sunny-beach-holiday.jpg');
    background-size: cover;
    background-position: bottom
    }

    .error {
    text-align: center;
    padding: 16px;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%)
    }

    h1 {
    margin: -10px 0 -30px;
    font-size: calc(17vw + 40px);
    opacity: .8;
    letter-spacing: -17px;
    }

    p {
    opacity: .8;
    font-size: 20px;
    margin: 8px 0 38px 0;
    font-weight: bold
    }
    </style>
</head>
<body>
    <a href="" class="fa fa-arrow-left"></a>
    <div class="error">
    <h1>404</h1>
    <p>Oops! Algo salió mal.</p>
    <a style="opacity: .8; font-size: 20px;
    margin: 8px 0 38px 0;
    font-weight: bold; color: #fff" href="{{ url('/') }}">Volver a inicio</a>
    </div>
</body>
</html>


