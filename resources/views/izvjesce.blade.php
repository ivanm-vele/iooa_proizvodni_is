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

@if (isset($izvjesce))
<h3>Uređivanje izvještaja #{{ $izvjesce->id }}</h3>
<br><br>
@else
<h3>Izrada novog izvještaja</h3>
<br><br>
@endif

         <form method="POST" role="form" class="form-horizontal">

            <input hidden name="id" value="{{ $izvjesce->id or '' }}">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Komada proizvedeno</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="0" name="komada_proizvedeno" value="{{ $izvjesce->komada_proizvedeno or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Komada škarta</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="0" name="komada_skarta" value="{{ $izvjesce->komada_skarta or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Minuta izvan pogona</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="0" name="minuta_izvan_pogona" value="{{ $izvjesce->minuta_izvan_pogona or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Opis Izvješća</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="inputEmail3" placeholder="Opis" name="opis" rows="4" cols="50">{{ $izvjesce->opis or '' }}</textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Opis Kvarova</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="inputEmail3" placeholder="Opis" name="opis_kvarovi" rows="4" cols="50">{{ $izvjesce->opis_kvarovi or '' }}</textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tip:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="izvjesce_tip_id">
                      <option value=""></option>
                      @foreach($tipovi_izvjesca as $tip)
                       <option value="{{ $tip->id }}" {{ isset($izvjesce) && $tip->id == $izvjesce->izvjesce_tip_id  ? "selected='true'" : "" }} >{{ $tip->naziv }}</option>
                      @endforeach
                  </select>
                </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Stroj:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="stroj_id">
                      <option value=""></option>
                      @foreach($strojevi as $stroj)
                       <option value="{{ $stroj->id }}" {{ isset($izvjesce) && $stroj->id == $izvjesce->stroj_id  ? "selected='true'" : "" }} >{{ $stroj->naziv }} - {{ $stroj->opis }}</option>
                      @endforeach
                  </select>
                </div>
          </div>

        @if (isset($izvjesce))
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
