@extends('MesModeles.Exercice6Modele');
@section('titre_champ')
    Kaboum
@endsection

@section('titre1_champ')
    Cette page est explosive
@endsection

@section('contenu')
    Veuillez presser une touche pour lancer le compte à rebours pour effacer cette page.
@endsection

@section('js')
    <script>
        window.addEventListener('load', (event) => {
            document.addEventListener("keydown", keydown);
        });

        function keydown() {
            let body = document.getElementsByTagName("body")[0];
            document.removeEventListener("keydown", keydown);
            let x = 10;
            let intervalID = setInterval(function() {
                body.innerHTML += `<strong>Cette page va s'effacer dans ${x}.</strong><br/>`;
                if (x === 0) {
                    body.innerHTML = "";
                    window.clearInterval(intervalID);
                }
                x--;
            }, 1000);
        }
    </script>
@endsection
