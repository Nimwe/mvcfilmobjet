<?php
declare (strict_types = 1);
namespace mvcfilmobjet\Model\entities ;

class Type {

    private int $id_type ;
    private $name ;
    

// Setters for Genre

public function setId_type(int $id_type) { 
    return $this->id_type = $id_type; 
}
public function setName($name) { 
    $this->name = $name;
}

// Getters for Genre
public function getId_type():int { 
    return $this->id_type ;
}
public function getName() { 
    return $this-> name;
}

}
?>