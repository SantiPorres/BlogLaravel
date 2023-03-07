@extends('layouts.layout-nav')

@section('body')
    <head>
        <style>
            section {
                position: absolute;
                z-index: 3000;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 2px;
                flex-wrap: wrap;
                overflow:  hidden;
                background: rbga(0,0,0,0.5);
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
                /* background: #fff; */
            }

            section .alert {
                position: absolute;
                width: 666px;
                background: #222;
                display: flex;
                text-align: center;
                justify-content: center;
                align-items: center;
                padding: 40px;
                border-radius: 4px;
                box-shadow: 0 15px 35px rbga(0,0,0,0.5);
                border: solid 1.5px #0f0;
                
            }

            form .writeThread {
                position: absolute;
                width: 800px;
                background: #222;
                z-index: 1000;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 40px;
                border-radius: 4px;
                box-shadow: 0 15px 35px rbga(0,0,0,0.5);
                border: solid 1.5px #0f0;
                
            }

            section .alert .content {
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                gap: 40px;
            }

            form .writeThread .content {
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                gap: 40px;
            }

            form .writeThread .content h2,
            section .alert .content h2 {
                font-size: 2em;
                color: #0f0;
                text-transform: uppercase;
                font-weight: 500;
            }

            form .writeThread .content .form, 
            section .alert .content .form{
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 25px;
            }

            form .writeThread .content .form .inputBx {
                position: relative;
                width: 100%;
            }

            form .writeThread .content .form .inputBx input,
            section .alert .content .form .inputBx input {
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

            form .writeThread .content .form .inputBx i {
                position: absolute;
                left: 0;
                padding: 15px 10px;
                font-style: normal;
                color: #aaa;
                transition: 0.5s;
                pointer-events: none;
            }

            .writeThread .content .form .inputBx input:focus ~ i,
            .writeThread .content .form .inputBx input:valid ~ i {
                transform: translateY(-7.5px);
                font-size: 0.8em;
                color: #fff;
            }

            





            form .writeThread .content .form .inputBxTxt {
                position: relative;
                width: 100%;
            }

            form .writeThread .content .form .inputBxTxt textarea {
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
                height:200px;
                resize: none;
            }

            form .writeThread .content .form .inputBxTxt textarea i {
                position: absolute;
                left: 0;
                padding: 15px 10px;
                font-style: normal;
                color: #aaa;
                transition: 0.5s;
                pointer-events: none;
            }

            form .writeThread .content .form .inputBxTxt input:focus ~ i {
                transform: translateY(-7.5px);
                font-size: 0.8em;
                color: #fff;
            }

            form .writeThread .content .form .inputBx input[type="submit"]{
                padding: 10px;
                background: #0f0;
                color: #111;
                font-weight: 600;
                font-size: 1.25em;
                letter-spacing: 0.05em;
                cursor: pointer;
            }

        </style>
    </head>

    <body>

    @if(session()->has('message'))
    <style>
        form {
            display: none;
        }
    </style>
    <section style="">
    <div class="alert">
            <div class="content">
                <h2>{{ session()->get('message') }}</h2>
                <div class="links">
                        <a href="/dashboard" style="
                                                color: #fff;
                                                padding: 0px 30px;"
                                                > <- Volver al dashboard</a>
                        <a href="/createThread" style="
                                                color: #0f0;
                                                padding: 0px 30px;"
                                                > + Crear otro hilo</a>
                </div>
                <div class="form">
                        
                </div>
            </div>
    </div>
    </section>
    @endif

    <form action="{{route('post.store')}}" method="post">
    @csrf

    <div class="writeThread">
        <div class="content">
            <h2>Crear hilo</h2>
            <div class="form">
                    <div class="inputBx">
                        <input type="text" name="title" required>
                        <i>Titulo del hilo</i>
                    </div>
                    <div class="inputBxTxt">
                        <textarea  type="text" placeholder="Escribe aquí..." name="text_post" required></textarea>
                    </div>
                    <div class="inputBx">
                        <input href="#" type="submit" value="Publicar hilo">
                    </div>
            </div>
        </div>
    </div>
    </form>
        
    </body>
@endsection