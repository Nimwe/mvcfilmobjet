<?php

namespace mvcfilmobjet\Model\Daos ;

use mvcfilmobjet\Model\Daos\BaseDao;
use mvcfilmobjet\Model\Entities\Actor;

Class ActorDao extends BaseDao {

//Create an actor
    public function create(Actor $actor) {
        $statement = $this->db->prepare("INSERT INTO actor (surname,firstname,photo) VALUES (?,?,?)");
        $s = $actor->getSurname();
        $f = $actor->getFirstname();
        $p = $actor->getPhoto();
        $res = $statement->execute([$s,$f,$p]);
    }
//Read all actors
    public function findAll(){
        $statement = $this->db->prepare ("SELECT * FROM actor") ;
        $res = $statement-> execute() ;
        if($res) {
    // Parcours les éléments de création d'objets à partir des typles (rangées)
            while ( $row = $statement->fetch()) {
            $objs[] = $this->createObjectFromFields($row); } // renvoi un tableau d'objet
            } 
            return $objs;      
    }
//Read one actor with id    
    public function findOne($id_actor){
        $statement = $this->db->prepare("SELECT * FROM actor WHERE id_actor=?");
        $res = $statement->execute([$id_actor]);
        if ($statement->Rowcount() === 1) {
            $row = $statement->fetch();
            return $this->createObjectFromFields($row);
        } else {
            throw new \Exception("Pas d'\acteur à cette position");
        }
    }
//Update an actor
    public function updateActor(Actor $actor) { 
        $statement = $this->db->prepare("UPDATE actor SET surname = ?, firstname = ?, photo = ? WHERE id_actor =?");
        $s = $actor->getSurname();
        $f = $actor->getFirstname();
        $p = $actor->getPhoto();
        $i = $actor->getId_actor() ;
        $res = $statement->execute([$s,$f,$p,$i]);
        }
// Delete an actor
    public function deleteActor ($id_actor) {
        $statement = $this->db->prepare("DELETE FROM actor WHERE id_actor=?");
        $res = $statement->execute([$id_actor]);
    }
// Create an Object
    public function createObjectFromFields($row) {
        $actor = new Actor();
        if (isset($row['id_actor'])) {
            $actor ->setId_actor($row['id_actor']);
        } else {
            $actor->setId_actor($row['id_actor']||null);
        }
            $actor->setSurname($row['surname']);
            $actor->setFirstname($row['firstname']);
            $actor->setPhoto($row['photo']);
        return $actor;
        } 
}
?>