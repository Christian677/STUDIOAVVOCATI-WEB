<nav class="shadow-lg">
    <ul>
      @guest
         <li><a href="{{route('login')}}" class="accedi-registrati"><strong>ACCEDI O REGISTRATI</strong></a></li>
      @endguest
      <li><a href="#" class="servizi"><strong>SERVIZI</strong></a></li>
      <li><a href="#" class="chi-siamo"><strong>CHI SIAMO</strong></a></li>
      <li><a href="#" class="area-riservata"><strong>AREA RISERVATA</strong></a></li>
    </ul>
</nav>
