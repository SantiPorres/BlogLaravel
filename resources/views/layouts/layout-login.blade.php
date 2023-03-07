<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap');

    * {
        font-family: 'Tilt Neon', cursive;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #000;
    }

    form {
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

    form::before {
        content:'';
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(#000,#0f0,#000);
    }

    form span {
        position: relative;
        display: block;
        width: calc(6.25vw - 2px);
        height: calc(6.25vw - 2px);
        background: #181818;
        z-index: 2;
        transition: 1.5s;
    }

    form span:hover {
        background: #0f0;
        transition: 0s;
    }

    form .singin {
        position: absolute;
        width: 400px;
        background: #222;
        z-index: 1000;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
        border-radius: 4px;
        box-shadow: 0 15px 35px rbga(0,0,0,0.5);
    }

    form .singin .content {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 40px;
    }

    form .singin .content h2 {
        font-size: 2em;
        color: #0f0;
        text-transform: uppercase;
    }

    form .singin .content .form {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    form .singin .content .form .inputBx {
        position: relative;
        width: 100%;
    }

    form .singin .content .form .inputBx input {
        position: relative;
        width: 100%;
        background: #333;
        border: none;
        outline: none;
        padding: 25px 10px 7.5px;
        border-radius: 4px;
        color: #fff;
        font-weight: 500;
        font-size: 1em;
    }

    form .singin .content .form .inputBx i {
        position: absolute;
        left: 0;
        padding: 15px 10px;
        font-style: normal;
        color: #aaa;
        transition: 0.5s;
        pointer-events: none;
    }

    .singin .content .form .inputBx input:focus ~ i,
    .singin .content .form .inputBx input:valid ~ i {
        transform: translateY(-7.5px);
        font-size: 0.8em;
        color: #fff;
    }

    .singin .content .form .links {
        position: relative;
        width: 100%;
        display: flex; 
        justify-content: space-between;
    }

    .singin .content .form .links a {
        color: #fff;
        text-decoration: none;
    }

    .singin .content .form .links a:nth-child(2) {
        color: #0f0;
        font-weight: 600;
    }

    .singin .content .form .inputBx input[type="submit"] {
        padding: 10px;
        background: #0f0;
        color: #111;
        font-weight: 600;
        font-size: 1.25em;
        letter-spacing: 0.05em;
        cursor: pointer;
    }

    .alert {
        margin-top: -10px;
        margin-bottom: -10px;
        z-index: 2000;
        padding: 3px;
        background: none;
        text-align: center;
        border-color: #0f0;
        color: #0f0;
    }

    @media (max-width: 900px) {
        form span {
            width: calc(10vw - 2px);
            height: calc(10vw - 2px);
        }
    }

    @media (max-width: 600px) {
        form span {
            width: calc(20vw - 2px);
            height: calc(20vw - 2px);
        }
    }

    </style>
    
</head>
<body>
    @yield('body')
    
</body>
</html>