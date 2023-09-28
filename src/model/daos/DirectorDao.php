<?php

namespace mvcfilmobjet\Model\Daos ;

use mvcfilmobjet\Model\Daos\BaseDao;
use mvcfilmobjet\Model\Entities\Director;

Class DirectorDao extends BaseDao {

// Create a director
    public function create(Director $director){       
        $statement = $this->db->prepare("INSERT INTO director (surname,firstname, photo ) VALUES(?,?,?)");
        $s = $director->getSurName();
        $f = $director->getFirstName();
        $p = $director->getPhoto();   
        $res = $statement->execute([$s,$f,$p]);
    }
// Read all directors
    public function findAll(){
        $statement = $this->db->prepare ("SELECT * FROM director") ;
        $res = $statement-> execute() ;
        if($res) {
            while ( $row = $statement->fetch()) {
            $objs[] = $this->createObjectFromFields($row); }
        } 
            return $objs;
    }
// Read one director with id
    public function findOne($id_director){
        $statement = $this->db->prepare("SELECT * FROM director WHERE id_director=?");
        $res = $statement->execute([$id_director]);
        if ($statement->Rowcount() === 1 ) {
            $row = $statement->fetch();
            return $this->createObjectFromFields($row);
        } else {
            throw new \Exception ( "Pas de réalisateur à cette position");
        }
    }
// Update a director
    public function updateDirector(Director $director) {
        $statement = $this->db->prepare("UPDATE director SET surname = ?, firstname = ?, photo = ? WHERE id_director =?");
        $s = $director->getSurname();
        $f = $director->getFirstname();
        $p = $director->getPhoto();
        $i = $director->getId_director() ;
        $res = $statement->execute([$s,$f,$p,$i]);
    }
// Delete a director
    public function deleteDirector ($id_director) {
        $statement = $this->db->prepare("DELETE FROM director WHERE id_director=?");
        $res = $statement->execute([$id_director]);
    }
// Create an object
    public function createObjectFromFields($row) {
        $director = new Director();
        if (isset($row['id_director'])) {
            $director ->setId_director($row['id_director']);
        } else {
            $director->setId_director($row['id_director']||null);
        }
            $director->setSurname($row['surname']);
            $director->setFirstname($row['firstname']);
            $director->setPhoto($row['photo']);
        return $director;
    } 
}
?>