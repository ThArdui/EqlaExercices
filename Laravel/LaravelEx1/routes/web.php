<?php

use Illuminate\Support\Facades\Route;
Route::get('/{str}',function($str){
    return "Je suis la page $str.";
});

Route::get('/toto',function(){
    return "Je suis la page super page de toto !";
});

Route::view('/', 'welcome');
Route::get('/salutation', function () {
    return "Salut ! Bienvenue sur ce site !";
});
Route::post('/chemin', function(){
    return "via post";
});

Route::get('article/{numero}', function($numero)
{
    return "Le numéro de l'article est $numero";
});

Route::get('article/{numero}', function($numero)
{
    return "Le numéro de l'article est $numero.";
})->whereNumber('numero');

Route::get('article/{numero}/{allee}', function($numero, $allee)
{
    return "Le numéro de l'article est $numero et il est rangé dans l'allée n°$allee.";
})->whereNumber('numero')->whereAlphaNumeric('allee');

Route::get('/json', function(){
    return ["foo"=>"bar"];
});

Route::get('/google',function(){
    return redirect("http://www.google.be");
});
/*
Route::get('article/{numero}/{allee}', function($numero, $allee)
{
    return "Le numéro de l'article est $numero et il est rangé dans l'allée n°$allee.";
});

Route::get('article/{numero}/{allee?}', function($numero, $allee = null)
{
    if(!is_null($allee)) return "Le numéro de l'article est $numero et il est rangé dans l'allée n°$allee.";
    else return "Le numéro de l'article est $numero5.....";
});*/
