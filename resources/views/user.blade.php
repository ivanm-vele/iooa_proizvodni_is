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

@if (isset($user))
<h3>Uređivanje korisnika #{{ $user->id }}</h3>
<br><br>
@else
<h3>Izrada novog korisnika</h3>
<br><br>
@endif

         <form method="POST" role="form" class="form-horizontal">

            <input hidden name="id" value="{{ $user->id or '' }}">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Korisničko ime</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Naziv" name="name" value="{{ $user->name or '' }}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Uloga:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="uloga_id">
                      <option value=""></option>
                      @foreach($uloge as $uloga)
                       <option value="{{ $uloga->id }}" {{ isset($user) && $user->uloga_id == $uloga->id  ? "selected='true'" : "" }} >{{ $uloga->naziv }}</option>
                      @endforeach
                  </select>
                </div>
          </div>

        <div class="col-sm-10 col-sm-offset-2">
          <table class="table" style="font-size:12px;">
            <thead>
              <tr>
                <th></th>
                <th>Radnik</th>
                <th>Tehnolog</th>
                <th>Upravitelj</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Radnici</td>
                <td>Listanje, pregled</td>
                <td>Listanje, pregled, uređivanje</td>
                <td>Listanje, pregled, uređivanje</td>
              </tr>
              <tr>
                <td>Proizvodi</td>
                <td>X</td>
                <td>Listanje, pregled</td>
                <td>Listanje, pregled, uređivanje</td>
              </tr>
              <tr>
                <td>Strojevi</td>
                <td>X</td>
                <td>X</td>
                <td>Listanje, pregled, uređivanje</td>
              </tr>
              <tr>
                <td>Skladišta</td>
                <td>X</td>
                <td>Listanje, pregled</td>
                <td>Listanje, pregled, uređivanje</td>
              </tr>
              <tr>
                <td>Inventar</td>
                <td>X</td>
                <td>Listanje, pregled, uređivanje</td>
                <td>Listanje, pregled, uređivanje</td>
              </tr>
              <tr>
                <td>Izvješća</td>
                <td>Listanje, pregled i uređivanje za samo "dnevno stanje proizvodnje"</td>
                <td>Listanje, pregled, uređivanje</td>
                <td>Listanje, pregled, uređivanje</td>
              </tr>
              <tr>
                <td>Korisnici</td>
                <td>X</td>
                <td>X</td>
                <td>Listanje, pregled, uređivanje</td>
              </tr>
            </tbody>
          </table>
        </div>


        @if (isset($user))
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
