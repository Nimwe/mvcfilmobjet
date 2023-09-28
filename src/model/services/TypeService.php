<?php
 
namespace mvcfilmobjet\Model\services ;
use mvcfilmobjet\Model\Daos\TypeDao;
 

class TypeService {

    private $typeDao ;
    public function __construct() {
        $this -> typeDao = new typeDao();
    }

//Create a type
    public function create($typeData) {
        $type =  $this->typeDao->createObjectFromFields($typeData);
        $this->typeDao->create($type);
    }
//Read all types   
    public function getAllTypes() { 
        $types = $this->typeDao->findAll();
        return $types ;
    }
//Read on type with id
    public function getOneType($id_type) { 
        $type = $this->typeDao->findOne($id_type);
        return $type ;
    }
//Update a type
    public function update($typeData) {
        $type = $this->typeDao->createObjectFromFields($typeData);
        $this->typeDao->updateType($type);
    }
//Delete a type
    public function delete($id_type) {
        $type = $this->typeDao->deleteType($id_type);
        $this->typeDao->deleteType($type);
    }  
}
?>