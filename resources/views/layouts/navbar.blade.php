<nav class="shadow-lg">
    <ul>
      @guest
         <li><a href="{{route('login')}}" class="accedi-registrati"><strong>ACCEDI O REGISTRATI</strong></a></li>
      @endguest
      @auth
         <li>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="logout">
                <a href=""><strong>LOGOUT</strong></a>
              </button>
            </form>
         </li>
      @endauth
      <div class="secservizi">
      
     
      <li><a href="home.blade.php" class="servizi"><strong>SERVIZI</strong></a></li></div>
      <div class="secchisiamo">
        <li><a href="home.blade.php" class="chi-siamo"><strong>CHI SIAMO</strong></a></li></div>
        <div class="secarearis">
          <li><a href="home.blade.php" class="area-riservata"><strong>AREA RISERVATA</strong></a></li></div>
          <h1>
      <img src="{{URL::to('/')}}/images/martelletto.svg" class="logo"/>
      Studio Casponi
      <img src="{{URL::to('/')}}/images/bilancia.svg" class="logo"/>
      </h1>
      @auth
      <div class="secuser">
      <li><a href="#" class="accedi-registrati"><strong>{{Auth::user()->name}}</strong></a></li></div>
      @endauth
    </ul>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("li").on({
        mouseenter: function(){
        $(this).css({"font-family": "Segoe UI","text-decoration": "underline"});
        }
    });    
});
</script>
<style>

.secservizi{
  
}


</style>
</nav>





