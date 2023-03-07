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

            section .alert .container form {
                width: 100%;
                padding: 30px 30px 0px 30px;
            }

            section .alert .container form input[type="text"] {
                width: 100%;
                border-color: #fff;
                color: #fff;
                background: none;
                float: right;
                border: solid 1px;
                border-radius: 4px;
            }

            section .alert .container form input[type="submit"] {
                background: none;
                color: #0f0;
                border: none;
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
                    <p style="
                            font-size: 1em;
                            color: #fff;
                            font-weight: 500;
                            padding-bottom: 30px;
                            white-space: pre-wrap"
                            >{{$post->text_post}}</p>
                <div class="links">
                        <i style="
                                color: #fff;
                                float: left;
                                padding: 0px 30px;
                                font-style: normal;"
                                >Por: {{$post->getAuthor->username}}</i>
                        <i style="
                                color: #fff;
                                float: left;
                                padding: 0px 30px;
                                font-style: normal;"
                                >{{$post->created_at->format('d-m-Y H:i:s')}}</i>    
                                
                </div>
                    <form>
                    <!-- <form action="{{route('comment.store')}}" method="post"> -->
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <input type="text" name="answer" maxlength="180" required>
                        <i style="
                        font-style: normal;
                        background: none;
                        color: #0f0;
                        border: none;">Enviar comentario</i>
                    <!-- <input href="#" type="submit" value="Enviar comentario"> -->
                    </form>
            </div>
    </div>
    </section>

    @endforeach

    </body>

    
@endsection