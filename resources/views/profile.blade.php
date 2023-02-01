@extends('layouts.profiles')

@section('username', 'H3lc1ooS')

@section('content')
<section class="data-profile flex justify-center align-center col">
     <section class="profile-img">
          <img src="/img/profile.jpg" alt="">
     </section>
     <section class="username align-center" id="username">
          @yield('username')
     </section>
     <section class="favorite-tags">
          <ul class="favorite-taglist space-evenly flex row">
               <a href="#" class="list-element">
                    <li>#Math</li>
               </a>
               <a href="#" class="list-element">
                    <li>#informatic</li>
               </a>
               <a href="#" class="list-element">
                    <li>#tlp</li>
               </a>
          </ul>
     </section>
     <section class="contagem flex space-evenly">
          <section class="flex col align-center">
               <div>Publicações</div>
               <div class="count-box publicações">139</div>
          </section>
          <section class="flex col align-center">
               <div>Comentarios</div>
               <div class="count-box comentarios">1,23 k</div>
          </section>
     </section>
</section>

<section class="create-post-conteiner flex justify-center">
     <section class="create-post-area flex align-center space-between">
          <a href="#" id="create-post">Escreva a sua dúvida</a>
          <a href="#" class="flex align-center">
               <ion-icon name="add-circle-outline" id="post-icon"></ion-icon>
          </a>
     </section>
</section>

<section class="posts-area flex col align-center">
     <section class="post-card flex col align-center">
          <section class="post-header flex align-center space-evenly">
               <section class="profile-pic-area">
                    <img src="/img/profile.jpg" alt="Foto de perfil" id="profile-pic">
               </section>

               <a href="#" id="username">H3lc1ooS</a>
               <p class="time">19/12/2022</p>
          </section>

          <section class="post-body">
               <p id="ask">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, nam animi esse, enim
                    earum est quis explicabo dolorum modi temporibus repudiandae vel? Nostrum quas placeat illum.
                    Nobis iure laudantium debitis?</p>
          </section>

          <section class="post-footer flex space-between">
               <section class="post-tags-area flex space-evenly">
                    <label for="">#</label>
                    <ul class="post-tags flex space-evenly">
                         <li class="post-tag"><a href="#" id="tag">Math</a></li>
                         <li class="post-tag"><a href="#" id="tag">Portuguese</a></li>
                    </ul>
               </section>
               <a href="#" class="comment">
                    <ion-icon name="chatbubble-outline" id="comment-icon"></ion-icon>
               </a>
          </section>
     </section>
</section>
@endsection