@forelse($people as $personne)
    -- Nom:{{$personne->Name}} </br>
    -- Prénom: {{$personne->Firstname}} </br>
    -- Âge: {{$personne->Age}} </br>
@empty
    Personne n'est là. Je me sens bien seul.
@endforelse
