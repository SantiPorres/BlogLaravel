<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap');

    * {
        font-family: 'Tilt Neon', cursive;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
    }

    header {
        background: #222;
        position: fixed;
        width: 100%;
        /* color: #0f0; */
        top: 0;
        right: 0;
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px 12%;
        transition: all .50s ease;
    }
    
    body {
        min-height: 100vh;
        background: #000;
    }

    .navbar {
        display: flex;
    }

    .navbar a {
        color: #0f0;
        text-decoration: none;
        font-size: 1.2em;
        padding: 5px;
        margin: 0px 30px;
        border-radius: 4px;
        padding: 5px;
        margin: 0px 30px;
        transition: 0.5s;
    }

    .navbar a:hover {
        color: #000;
        background: #0f0;
        text-decoration: none;
        font-size: 1.2em;
        padding: 5px;
        margin: 0px 30px;
        border-radius: 4px;
        padding: 5px;
        margin: 0px 30px;
        transition: 0.5s;
    }

    .navbar li .btn-logout,
    .navbar li .btn-logout:hover {
        background: #222;
        color: white;
        text-decoration: none;
        font-size: 1.2em;
        padding: 5px;
        margin: 0px 30px;
        border-radius: 4px;
        padding: 5px;
        margin: 0px 30px;
    }

    .navbar img {
        height: 25px;
        margin: 0px;
        margin-right: 30px;
    }

    .spacer {
        width: 100%;
        min-height: 100px;
        /* background: #fff; */
    }

    span {
        position: absolute;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2px;
        flex-wrap: wrap;
        overflow:  hidden;
    }

    /* ::before {
        content:'';
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(#000,#0f0,#000);
    } */

    span {
        position: relative;
        display: block;
        width: calc(6.25vw - 2px);
        height: calc(6.25vw - 2px);
        background: #181818;
        z-index: 2;
        transition: 1.5s;
    }

    span:hover {
        background: #0f0;
        transition: 0s;
    }

    

    @media (max-width: 900px) {
        span {
            width: calc(10vw - 2px);
            height: calc(10vw - 2px);
        }
    }

    @media (max-width: 600px) {
        span {
            width: calc(20vw - 2px);
            height: calc(20vw - 2px);
        }
    }
    </style>
</head>
<body>
    @yield('body')
    <header>
        <ul class="navbar">
            <img src="{{URL::asset('logo.png')}}" alt="">
            <li><a href="../dashboard">Publicaciones</a></li>
            <li><a href="../createThread">Crear hilo</a></li>
            <li><a href="/logout" class="btn-logout">Cerrar sesión</a></li>
        </ul>
    </header>
</body>
</html>