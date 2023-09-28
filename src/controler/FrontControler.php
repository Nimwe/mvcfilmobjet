<?php 
namespace mvcfilmobjet\Controler;
use mvcfilmobjet\Model\services\ActorService;
use mvcfilmobjet\Model\services\DirectorService;
use mvcfilmobjet\Model\services\typeService;

class FrontControler {

private $ActorService;
private $DirectorService;
private $TypeService;
private $twig;

//Constructeur
    public function __construct($twig) { 
        $this->ActorService = new ActorService();
        $this->DirectorService = new DirectorService();
        $this->TypeService = new TypeService();
        $this->twig = $twig;
    }

                                        //Acteurs
//Create
    public function addActor() {
        echo $this->twig->render('addActor.html.twig');
    }
//Read    
    public function afficheAllActors() {
        $actors = $this -> ActorService -> getAllActors();
        //require (__DIR__."../../view/AfficheActors.php");
        echo $this->twig->render('actors.html.twig', ["actors" => $actors]);
    }
    public function afficheOneActor($id_actor) {
        try {
            $actor = $this -> ActorService -> getOneActor($id_actor);
            require (__DIR__."../../view/AfficheOneActor.php");
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }
//Update   
    public function fupdateActor($id) {
        $acteur = $this->ActorService->getOneActor($id) ; 
        require (__DIR__."../../view/fModifActor.php");
    }
//Delete
    public function deleteActor() {
        echo $this->twig->render();
    }

                                        //Réalisateurs

//Create
    public function addDirector() {
        echo $this->twig->render('adddirector.html.twig');
    }
//Read
    public function afficheAllDirectors() {
        $directors = $this -> DirectorService -> getAllDirectors();
        // require (__DIR__."../../view/Affichedirectors.php");
        echo $this->twig->render('directors.html.twig', ["directors" => $directors]);
    }
    public function afficheOneDirector($id_director) {
        $realisateur = $this -> DirectorService -> getOneDirector($id_director);
        require (__DIR__."../../view/afficheOneDirector.php");       
    } 
//Update   
    public function fupdateDirector($id) {
        $realisateur = $this->DirectorService->getOneDirector($id) ; 
        require (__DIR__."../../view/fModifDirector.php");
    }
//Delete
    public function deleteDirector() {
        echo $this->twig->render();
    }
    
                                        // Type
//Create
    public function addType() {
        echo $this->twig->render('addtype.html.twig');
    }
//Read
    public function afficheAllTypes() {
        $types = $this -> TypeService -> getAllTypes();
        // require (__DIR__."../../view/AfficheTypes.php");
        echo $this->twig->render('types.html.twig', ["types" => $types]);
    }
    public function afficheOneType($id_type) {
        $type = $this -> TypeService -> getOneType($id_type);
        require (__DIR__."../../view/AfficheOnetype.php");
    }
//Update   
    public function fupdateType($id) {
        $genre = $this->TypeService->getOneType($id) ; 
        require (__DIR__."../../view/fModifType.php");
    }
//Delete
    public function deleteType() {
        echo $this->twig->render();
    }
    
}
?>