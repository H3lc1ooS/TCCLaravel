@extends('layouts.second')
@section('title','Post')

@section('content')

<main class="main-container flex justify-center">
    <section class="post-area">
        <section id="postInfo" class="flex space-between align-center">
            <section class="left flex align-center">
                <section class="profile-pic-area">
                    <img src="/img/profile.jpg" alt="Foto de perfil" id="profile-pic">
                </section>
                <a href="#" id="username">Hélcio</a>
            </section>

            <p>{{$pergunta->updated_at}}</p>
        </section>

        <section class="content">
            <p id="text">{{$pergunta->pergunta}}</p>
            <p id="tagName">#<span>Português</span></p>

        </section>
    </section>
</main>
@endsection