<?php
require_once "vendor/autoload.php";
use mvcfilmobjet\controler\FrontControler;
use mvcfilmobjet\controler\BackControler;
// Norme PSR-4 il faut donner le nom que l'ont veux puis slash
// puis le sous repertoire (ici Controler), puis le nom de la class

// composer require twig/twig dans le terminal
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/src/view');
$twig = new Environment($loader, ['cache' => false, 'debug' => true]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

$fc = new FrontControler($twig);
$bc = new BackControler(); 

$base  = dirname($_SERVER['PHP_SELF']);
if(ltrim($base, '/'))
{$_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));}
                            
                            /*Routes*/
$route = new \Klein\Klein();

// Route pour l'application
$route-> respond('GET','/', function() use($fc) {
    return 'Bienvenue sur l\affiche';
});
                            /*ACTEURS*/
// Route pour des acteurs
$route-> respond('GET','/actors', function() use($fc) {
    $fc->afficheAllActors();
});
// Route pour un acteur
$route-> respond('GET','/actor/[:id_actor]', function($request) use($fc) {
    $fc->afficheOneActor($request->id_actor);
});
// Ajouter un acteur avec twig
$route->respond('GET', '/addactor', function() use ($fc) {
    $fc->addActor(); 
});
// Modifier un acteur (Form)
$route->respond('GET','/fupdateactor/[:id_actor]', function($request) use($fc) {
    $fc->fupdateActor($request->id_actor);
});
// Supprimer un acteur
$route->respond('GET','/deleteactor/[:id_actor]', function($request) use($bc) {
    $bc->deleteActor($request->id_actor);
});

                            /*REALISATEURS*/
// Route pour des réalisateurs
$route-> respond('GET','/directors', function() use ($fc){
    $fc->afficheAllDirectors();
});
// Route pour un réalisateur
$route-> respond('GET','/director/[:id_director]', function($request) use ($fc){
    $fc->afficheOneDirector($request->id_director);   
});
// Ajouter un realisateur avec twig
$route->respond('GET', '/adddirector', function() use ($fc) {
    $fc->addDirector(); 
});
// Modifier un réalisateur (Form)
$route->respond('GET','/fupdatedirector/[:id_director]', function($request) use($fc) {
    $fc->fupdateDirector($request->id_director);
});
// Supprimer un réalisateur
$route->respond('GET','/deletedirector/[:id_director]', function($request) use($bc) {
    $bc->deleteDirector($request->id_director);
});

                                /*GENRES*/
// Route pour tous les genres
$route-> respond('GET','/types', function() use ($fc){
    $fc->afficheAllTypes();
});
// Route pour un genre
$route-> respond('GET','/type/[:id_type]', function($request) use ($fc){
    $fc->afficheOneType($request->id_type);   
});
// Ajouter un genre avec twig
$route->respond('GET', '/addtype', function() use ($fc) {
    $fc->addType(); 
});
// Modifier un genre (Form)
$route->respond('GET','/fupdatetype/[:id_type]', function($request) use($fc) {
    $fc->fupdateType($request->id_type);
});
// Supprimer un acteur
$route->respond('GET','/deletetype/[:id_type]', function($request) use($bc) {
    $bc->deleteType($request->id_type);
});

                                /*POSTS*/
// Créer
$route->respond('POST','/addactor', function($request) use($bc) {
    $bc->addActor($request->paramsPost());
});
$route->respond('POST','/adddirector', function($request) use($bc) {
    $bc->addDirector($request->paramsPost());
});
$route->respond('POST','/addtype', function($request) use($bc) {
    $bc->addType($request->paramsPost());
});
// Modifier
$route->respond('POST','/updateActor', function($request) use($bc) {
    $bc->updateActor($request->paramsPost());
});
$route->respond('POST','/updateDirector', function($request) use($bc) {
    $bc->updateDirector($request->paramsPost());
});
$route->respond('POST','/updateType', function($request) use($bc) {
    $bc->updateType($request->paramsPost());
});

$route->dispatch();

?>