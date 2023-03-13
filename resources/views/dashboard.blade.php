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
                border-color: #999;
                color: #999;
                background: none;
                float: right;
                border: solid 1px;
                border-radius: 4px;
                font-size: 0.85em;
            }

            section .alert .container form input[type="submit"] {
                background: none;
                color: #0f0;
                border: none;
                font-size: 0.85em;
                padding: 10px 0px;
            }

            section .alert .container .comment {
                width: 100%;
                padding: 10px 30px;
                display: flex;
                align-items: center;
            }

            section .alert .container hr{
                width: 92%;
                height: 0px;
                border: none;
                border-top: 0.1px solid #999;
            }

            section .alert .container .comment p{
                width: 70%;
                font-size: 0.85em;
                color: #999;
                font-weight: 500;
                white-space: pre-wrap;
            }

            section .alert .container .comment i{
                width: 30%;
                font-size: 0.85em;
                color: #999;
                font-weight: 500;
                white-space: pre-wrap;
                text-align: right;
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
                    <h2 style="
                            padding-bottom: 30px;
                            text-align: center;
                            font-size: 2em;
                            color: #0f0;
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
                                font-size: 0.85em;"
                                >Por: {{$post->getAuthor->username}}</i>
                        <i style="
                                color: #fff;
                                float: left;
                                padding: 0px 30px;
                                font-style: normal;
                                font-size: 0.85em;"
                                >{{$post->created_at->format('d-m-Y H:i:s')}}</i>    
                </div>
                    <form action="{{route('comment.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}" required>
                        <input type="text" name="answer" maxlength="255"
                        placeholder="Comenta aquí..." required>
                        <input type="submit" value="Enviar comentario">
                    </form>
                @foreach ($comments as $comment)
                    @if ($comment->post_id == $post->id)
                        <hr>
                        <div class="comment">
                            <p>{{$comment->answer}}</p>
                            <i>{{$comment->getAuthorComment->username}}</i>
                        </div>
                    @endif
                @endforeach
            </div>
    </div>
    </section>

    @endforeach

    </body>

    
@endsection