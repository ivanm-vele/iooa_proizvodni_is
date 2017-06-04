<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Izbornik</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

    </head>
    <body>
 
    @include('includes/navigacija')


    <div class="container">
        <div class="row">

@if (isset($radnik))
<h3>Uređivanje radnika #{{ $radnik->id }}</h3>
<br><br>
@else
<h3>Izrada novog radnika</h3>
<br><br>
@endif

         <form method="POST" role="form" class="form-horizontal">

            <input hidden name="id" value="{{ $radnik->id or '' }}">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

          <div class="form-group">
            <label for="Ime" class="col-sm-2 control-label">Ime</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="Ime" placeholder="Ime" name="ime" value="{{ $radnik->ime or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label for="Prezime" class="col-sm-2 control-label">Prezime</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="Prezme" placeholder="Prezime" name="prezime" value="{{ $radnik->prezime or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label for="Uloga" class="col-sm-2 control-label">Uloga</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="Uloga" placeholder="Uloga" name="uloga" value="{{ $radnik->uloga or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Stroj:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="stroj_id">
                      <option value=""></option>
                      @foreach($strojevi as $stroj)
                       <option value="{{ $stroj->id }}" {{ isset($radnik) && $stroj->id == $radnik->stroj_id  ? "selected='true'" : "" }} >{{ $stroj->naziv }} - {{ $stroj->opis }}</option>
                      @endforeach
                  </select>
                </div>
          </div>
          
      @if ( Auth::user()->uloga_id != 3)
        @if (isset($radnik))
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Spremi</button>
            </div>
          </div>
        @else
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Dodaj</button>
            </div>
          </div>
        @endif
      @endif


        </form>

        </div>
    </div>




        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
