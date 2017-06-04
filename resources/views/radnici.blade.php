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

<h3>Pregled radnika</h3>
<br><br>

  <table class="table table-condensed table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Uloga</th>
        <th>Zaduženi stroj</th>
        <th>Kreiran</th>
      </tr>
    </thead>
    <tbody>
      

        @foreach ($radnici as $radnik)
          <tr class="href-row" href="/radnik/{{ $radnik->id }}">
            <td> {{ $radnik->id }} </td>
            <td><a href="/radnik/{{ $radnik->id }}">{{ $radnik->ime }}</a></td>
            <td><a href="/radnik/{{ $radnik->id }}">{{ $radnik->prezime }}</a></td>
            <td>{{ $radnik->uloga }}</td>
            <td>{{ $radnik->stroj->naziv }} - {{ $radnik->stroj->opis }}</td>
            <td><span class="badge"> {{ $radnik->created_at }}</span></td>
          </tr>  
      @endforeach

    </tbody>
  </table>
</div>
    </div><!-- /.container -->




        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
