@extends('layouts.main')

@section('title', 'Home')

@section('content')

@foreach($perguntas as $pergunta)
<section class="posts-area flex col align-center">
    <section class="post-card flex col align-center justify-center">
        <section class="post-header flex align-center space-between">
            <section class="user-id flex align-center">
                <section class="profile-pic-area">
                    <img src="/img/profile.jpg" alt="Foto de perfil" id="profile-pic">
                </section>
                <a href="#" id="username">H3lc1ooS</a>
            </section>
            <p class="time">{{$pergunta->updated_at}}</p>
        </section>

        <section class="post-body">
            <a href="/perguntas/{{$pergunta->id}}" id="ask">{{$pergunta->pergunta}}</a>
        </section>

        <section class="post-footer flex space-between">
            <ul class="post-tags flex space-evenly">
                <li class="post-tag"><a href="#" id="tag"><span>#</span>Português</a></li>
            </ul>
            <a href="#" class="comment"><ion-icon name="chatbubble-outline" id="comment-icon"></ion-icon></a>
        </section>
    </section>

@endforeach
@endsection