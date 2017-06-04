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

<h3>Pregled korisnika</h3>
<br><br>

  <table class="table table-condensed table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Korisničko Ime</th>
        <th>Uloga</th>
        <th>Kreirano</th>
      </tr>
    </thead>
    <tbody>
      

        @foreach ($users as $user)
          <tr class="href-row" href="/user/{{ $user->id }}">
            <td> {{ $user->id }} </td>
            <td><a href="/user/{{ $user->id }}">{{ $user->name }}</a></td>
            <td>{{ $user->uloga->naziv or 'Nedodjeljena' }}</td>
            <td><span class="badge"> {{ $user->created_at }}</span></td>
          </tr>  
      @endforeach

    </tbody>
  </table>
</div>
    </div><!-- /.container -->




        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
