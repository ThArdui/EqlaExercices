<p>
    @if($age>=65)
        Bienvenue cher Senior
    @elseif($age>=18 && $age<=64)
        Bienvenue sur le site
    @else
        Désolé, il faut être majeur pour entrer sur ce site.
    @endif
</p>
