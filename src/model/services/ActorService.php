<?php
 
namespace mvcfilmobjet\Model\services ;
use mvcfilmobjet\Model\Daos\ActorDao;
 

class ActorService {

    private $actorDao ;
    public function __construct() {
        $this -> actorDao = new ActorDao();
    }

//Create an actor
    public function create($actorData) {
        $actor =  $this->actorDao->createObjectFromFields($actorData);
        $this->actorDao->create($actor);
    }
//Read all actors
    public function getAllActors() { 
    $actors = $this->actorDao->findAll();
    return $actors ;
    }
//Read one actor with id
    public function getOneActor($id_actor) { 
        $actor = $this->actorDao->findOne($id_actor);
        return $actor ;
    }
//Update an actor
    public function update($actorData) {
        $actor = $this->actorDao->createObjectFromFields($actorData);
        $this->actorDao->updateActor($actor);
    }
//Supprimer un acteur
    public function delete($id_actor) {
        $actor = $this->actorDao->deleteActor($id_actor);
        $this->actorDao->deleteActor($actor);
    }
}
?>