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

@if (isset($proizvod))
<h3>Uređivanje proizvoda #{{ $proizvod->id }}</h3>
<br><br>
@else
<h3>Izrada novog proizvoda</h3>
<br><br>
@endif

         <form method="POST" role="form" class="form-horizontal">

            <input hidden name="id" value="{{ $proizvod->id or '' }}">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Naziv Proizvoda</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Naziv" name="naziv" value="{{ $proizvod->naziv or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Opis Proizvoda</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="inputEmail3" placeholder="Opis" name="opis" rows="4" cols="50">{{ $proizvod->opis or '' }}</textarea>
            </div>
          </div>

        @if (isset($proizvod))
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
