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
      <li><a href="#" class="servizi"><strong>SERVIZI</strong></a></li>
      <li><a href="#" class="chi-siamo"><strong>CHI SIAMO</strong></a></li>
      <li><a href="#" class="area-riservata"><strong>AREA RISERVATA</strong></a></li>
      @auth
      <li><a href="#" class="accedi-registrati"><strong>{{Auth::user()->name}}</strong></a></li>
      @endauth
    </ul>
</nav>
