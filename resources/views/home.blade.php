@extends('layouts.app')

@section('content')
<div class="center-text">
    <!--<img src="{{URL::to('/')}}/images/disegno.svg" class="logo"/>-->

    <h1>Studio Casponi</h1>

    <div class="main" id="section1">
        <a href="#section2">▼</a>
    </div>

    <div class="main" id="section2">
        <h2>Sezione 2</h2>
        <a href="#section1">Torna indietro</a>
    </div>
    
</div>
@endsection

<style>
  #section1 {
  height: 900px;
  background-color: pink;
}

#section2 {
  height: 600px;
  background-color: yellow;
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script>
$(document).ready(function(){
  $("p").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      let hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        window.location.hash = hash;
      });
    } 
  });
});
