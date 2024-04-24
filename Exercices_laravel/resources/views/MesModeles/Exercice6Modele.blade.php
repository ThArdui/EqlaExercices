<!DOCTYPE html>
<head>
    <title> @yield('titre_champ')</title>
</head>
<body>
<h1> @yield('titre1_champ')</h1>
@section('contenu')
    <p> Tapez du texte</p>
@show
@yield('js')


</body>
