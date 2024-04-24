<?php

use Illuminate\Support\Facades\Route;
use App\Models\Person;
Route::get('ex7', function ()
{
    return view('Exercice7View');
});
Route::get('ex6', function ()
{
    return view('Exercice6View');
});
Route::get('nopeople', function ()
{
    $people = array();
    return view('bladeExercice5')->with('people',$people);
}
);

Route::get('people', function ()
{
    $people = array(
        new Person("Johnny","Piette",47),
        new Person("Philip","Dupont",25),
        new Person("Bruno","Defalque",77)
    );
    return view('bladeExercice4')->with('people', $people);
}

    );

/*Route::get('/bladeex/{age}', function ($age)
{
    return view('bladeExercice3')->with('age',$age);
}

);  */

 Route::get('/bladeex3', function ()
{
    $age="65";
    return view('bladeExercice3',['age'=>$age] );
}
);
Route::get('/bladeex2',function ()
{
$firstName="Thomas";
return view('bladeExercice2',['firstName'=>$firstName]);

});

Route::view('/bladeex1','bladeExercice1');

Route::get('/user/welcome/{name}', function ($name)
{
return view('userwelcome')->with('name',$name);
});


Route::get('register/{clientln}/{clientfn}',function ($clientln,$clientfn)
{
    return view('vue3', compact('clientln','clientfn'));
    //return view('vue3', ['clientln' => $clientln, 'clientfn' => $clientfn]);
    // return view('vue3')->with('clientln',$clientln)->with('clientfn',$clientfn);

});
Route::get('newclient/{client}',function ($client){
    return view('vue2')->with('client',$client);
});
Route::get('/vue1',function ()
    {
        return view('vue1');
    });

Route::get('/', function(){
   return view('welcome');
});

Route::get('/toto',function (){
    return "Bienvenue Toto ";
});
Route::get('/jeux',function (){
    return view('games');
});

Route::get('/Hello/{name}', function ($name)
{
    return "Hello ".$name;
})->whereAlpha('name');

/*
 ex 3

Route::get('/Hello/{choosenword}', function ($choosenword)
{
    return "Hello ".$choosenword;
});

exercice 4 :


*/
