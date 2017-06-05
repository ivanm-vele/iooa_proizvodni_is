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

@if (isset($inventar))
<h3>Uređivanje toka inventara #{{ $inventar->id }}</h3>
<br><br>
@else
<h3>Izrada novog toka inventara</h3>
<br><br>
@endif

         <form method="POST" role="form" class="form-horizontal">

            <input hidden name="id" value="{{ $inventar->id or '' }}">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Broj komada</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="0" name="broj_komada" value="{{ $inventar->broj_komada or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Radnja:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="inventar_radnja_id">
                      <option value=""></option>
                      @foreach($radnje_inventara as $vrsta_radnje)
                       <option value="{{ $vrsta_radnje->id }}" {{ isset($inventar) && $vrsta_radnje->id == $inventar->inventar_radnja_id  ? "selected='true'" : "" }} >{{ $vrsta_radnje->naziv }}</option>
                      @endforeach
                  </select>
                </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Skladište:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="skladiste_id">
                      <option value=""></option>
                      @foreach($skladista as $skladiste)
                       <option value="{{ $skladiste->id }}" {{ isset($inventar) && $skladiste->id == $inventar->skladiste_id  ? "selected='true'" : "" }} >{{ $skladiste->naziv }}</option>
                      @endforeach
                  </select>
                </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Proizvod:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="proizvod_id">
                      <option value=""></option>
                      @foreach($proizvodi as $proizvod)
                       <option value="{{ $proizvod->id }}" {{ isset($inventar) && $proizvod->id == $inventar->proizvod_id  ? "selected='true'" : "" }} >{{ $proizvod->naziv }}</option>
                      @endforeach
                  </select>
                </div>
          </div>


        @if (isset($inventar))
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



        </form>

        </div>
    </div>




        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
