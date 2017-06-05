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

<h3>Pregled prometa inventara</h3>
<br><br>

  <table class="table table-condensed table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Radnja</th>
        <th>Broj komada</th>
        <th>Proizvod</th>
        <th>Skladište</th>
        <th>Autor</th>
        <th>Kreirano</th>
      </tr>
    </thead>
    <tbody>
      

        @foreach ($inventari as $inventar)
          <tr class="href-row" href="/inventar/{{ $inventar->id }}">
            <td> {{ $inventar->id }} </td>
            <td><a href="/inventar/{{ $inventar->id }}"> {{ $inventar->inventarRadnja->naziv }}</a></td>
            <td>{{ $inventar->broj_komada }} </td>
            <td>{{ $inventar->proizvod->naziv }}</td>
            <td>{{ $inventar->skladiste->naziv }}</td>
            <td>{{ $inventar->user->name }}</td>
            <td><span class="badge"> {{ $inventar->vrijeme_kreiranja }}</span></td>
          </tr>  
      @endforeach

    </tbody>
  </table>
</div>
    </div><!-- /.container -->




        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
