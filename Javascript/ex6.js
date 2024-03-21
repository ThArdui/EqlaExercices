let nombre1=33;
let nombre2=66;

if (nombre1===nombre2)
{
    console.log(`${nombre1} est égal à ${nombre2}`);
}
if (nombre1!==nombre2)
{
    console.log(`${nombre1} est différent que ${nombre2}` );
}
 if (nombre1>nombre2)
{
    console.log(`${nombre1} est plus grand que ${nombre2}`);
}
if (nombre1<nombre2)
{
    console.log(`${nombre1} est plus petit que ${nombre2}`);
}

if (nombre1 % nombre2===0)
{
    console.log(`${nombre1} est divisible par ${nombre2}`);
}
else
{
    console.log(`${nombre1} n'est pas divisible par ${nombre2}`);
}

nombre1++;

nombre2++
console.log(nombre1);
console.log(nombre2);
console.log( " le delta entre le nombre 1 ( "+nombre1+" ) et " +" le nombre 2 (" +nombre2+") est de "+(nombre1-nombre2)+". Celui-ci est donc négatif.");
let a=3;
let b=8;
let resultat=(a+b)**2;
console.log(`Le résultat de (a+b)² est ${resultat}`);
if (resultat===400)
{
    console.log(`Valeur maximale atteiinte pour (a+b)²`);
}
else
{
    console.log(`Il reste encore ${(400-resultat)} pour atteindre la valeur maximale pour (a+b)².`);
}