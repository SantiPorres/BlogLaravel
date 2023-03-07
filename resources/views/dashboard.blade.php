@extends('layouts.layout-nav')



@section('body')
    <head>
        <style>
            section {
                position: relative;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 20px 0px;
                flex-wrap: wrap;
                overflow:  hidden;
                
            }

            section .alert {
                position: relative;
                width: 800px;
                background: #222;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 40px;
                border-radius: 4px;
                box-shadow: 0 15px 35px rbga(0,0,0,0.5);
                border: solid 1.5px #0f0;
                
            }

            section .alert .container {
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                /* gap: 40px; */
            }

            section .alert .container .links {
                position: relative;
                width: 100%;
                display: inline;
                justify-content: center;
                /* align-items: right; */
                flex-direction: column;
                gap: 40px;
            }
        </style>
    </head>
    <body>
        <div class="spacer">
            <p>spacer</p>
        </div>

    @foreach ($posts as $post)

    <section >
    <div class="alert">
            <div class="container">
                <div class="content"></div>
                    <h2 style="
                            padding-bottom: 30px;
                            text-align: center;
                            font-size: 2em;
                            color: #0f0;
                            text-transform: capitalize;
                            font-weight: 500;"
                            >{{$post->title}}</h2>
                    <pre style="
                            font-size: 1em;
                            color: #fff;
                            font-weight: 500;
                            padding-bottom: 30px;"
                            >{{$post->text_post}}</pre>
                <div class="links">
                        <i href="/dashboard" style="
                                                color: #fff;
                                                float: left;
                                                padding: 0px 30px;
                                                font-style: normal;"
                                                >Por: {{$post->user_id}}</i>
                        <a href="" style="
                                                color: #0f0;
                                                float: right;
                                                padding: 0px 30px;"
                                                >Comentar este hilo</a>
                </div>
            </div>
    </div>
    </section>

    @endforeach

    </body>

    
@endsection