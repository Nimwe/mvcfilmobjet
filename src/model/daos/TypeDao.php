<?php

namespace mvcfilmobjet\Model\Daos ;

use mvcfilmobjet\Model\Daos\BaseDao;
use mvcfilmobjet\Model\Entities\Type;

Class TypeDao extends BaseDao {

// Create a type
    public function create(Type $type) {
        $statement = $this->db->prepare("INSERT INTO type (name) VALUES (?)");
        $n = $type->getName();
        $res = $statement->execute([$n]);
    }
// Read all types   
    public function findAll(){
        $statement = $this->db->prepare ("SELECT * FROM type") ;
        $res = $statement-> execute() ;
        if($res) {
            while ( $row = $statement->fetch()) {
            $objs [] = $this->createObjectFromFields($row); }
            } 
            return $objs;
    }
// Read one type    
    public function findOne($id_type){
        $statement = $this->db->prepare("SELECT * FROM type WHERE id_type=?");
        $res = $statement->execute([$id_type]);
        if ($res) {
            $row = $statement->fetch();
            return $this->createObjectFromFields($row);
        }
    }
// Update a type
    public function updateType(Type $type) { 
        $statement = $this->db->prepare("UPDATE type SET name = ? WHERE id_type =?");
        $s = $type->getName();
        $i = $type->getId_type() ;
        $res = $statement->execute([$s, $i]);
    }
// Delete a type
        public function deleteType ($id_type) {
            $statement = $this->db->prepare("DELETE FROM type WHERE id_type=?");
            $res = $statement->execute([$id_type]);
    }
// Create an object
    public function createObjectFromFields($row) {
        $type = new Type();
        if (isset($row['id_type'])) {
            $type ->setId_type($row['id_type']);
        } else {
            $type->setId_type($row['id_type']||null);
            }
            $type->setName($row ['name']);
        return $type;
    } 
}
?>
