
@foreach ($people as $personne)
-- Nom:{{$personne->Name}} </br>
    -- Prénom: {{$personne->Firstname}} </br>
    -- Âge: {{$personne->Age}} </br>
@endforeach
