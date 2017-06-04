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
        <title>{{ config('app.name', 'Proizvodni IS') }}</title>
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

@if (isset($stroj))
<h3>Uređivanje stroja #{{ $stroj->id }}</h3>
<br><br>
@else
<h3>Izrada novog stroja</h3>
<br><br>
@endif

         <form method="POST" role="form" class="form-horizontal">

            <input hidden name="id" value="{{ $stroj->id or '' }}">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Naziv Stroja</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Naziv" name="naziv" value="{{ $stroj->naziv or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Opis Stroja</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="inputEmail3" placeholder="Opis" name="opis" rows="4" cols="50">{{ $stroj->opis or '' }}</textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Proizvodnja:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="proizvod_id">
                      <option value=""></option>
                      @foreach($proizvodi as $proizvod)
                       <option value="{{ $proizvod->id }}" {{ isset($stroj) && $stroj->proizvod_id == $proizvod->id  ? "selected='true'" : "" }} >{{ $proizvod->naziv }}</option>
                      @endforeach
                  </select>
                </div>
          </div>

      @if ( Auth::user()->uloga_id == 1)
        @if (isset($stroj))
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
