     <nav class="navbar navbar-inverse navbar-fixed-top" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Proizvodni IS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Radnici <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/radnici">Pregledaj</a></li>
                @if ( Auth::user()->uloga_id != 3)
                  <li><a href="/radnik">Dodaj</a></li>
                @endif
              </ul>
            </li>

          @if ( Auth::user()->uloga_id == 1)
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Proizvodi <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/proizvodi">Pregledaj</a></li>
                <li><a href="/proizvod">Dodaj</a></li>
              </ul>
            </li>
          @endif

          @if ( Auth::user()->uloga_id == 1 or Auth::user()->uloga_id == 2)
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Strojevi <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/strojevi">Pregledaj</a></li>
                @if ( Auth::user()->uloga_id == 1)
                 <li><a href="/stroj">Dodaj</a></li>
                @endif
              </ul>
            </li>
          @endif

          @if ( Auth::user()->uloga_id == 1 or Auth::user()->uloga_id == 2)                
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Skladišta <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/skladista">Pregledaj</a></li>
                @if ( Auth::user()->uloga_id == 1)
                 <li><a href="/skladiste">Dodaj</a></li>
                @endif
              </ul>
            </li>
          @endif

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Izvješća <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/izvjesca">Pregledaj</a></li>
                <li><a href="/izvjesce">Podnesi</a></li>
              </ul>
            </li>

          @if ( Auth::user()->uloga_id == 1)
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Postavke <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/users">Korisnici</a></li>
                <li><a href="/opcije">Opcije</a></li>
                <li><a href="/opcije">Pomoć</a></li>
              </ul>
            </li>
          @endif

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Moj Račun ({{ Auth::user()->uloga->naziv }}) <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/logout">Odjava</a></li>
              </ul>
            </li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br>
<br>
<br>
<br>
