<?php
declare (strict_types = 1);

namespace mvcfilmobjet\Model\entities ;

class Director {
    private int $id_director;
    private $surname ;
    private $firstname ;
    public string $photo ;

//Setteurs for director
public function setId_director(int $id_director) { 
    $this->id_director = $id_director ;
    return $this; 
}
public function setSurname($surname) { 
    $this->surname = $surname ;
    return $this;
}
public function setFirstname($firstname) { 
    $this->firstname = $firstname ; 
    return $this ;
}
public function setPhoto(string $photo) {  
    $this->photo = $photo ; 
    return $this; 
}

//Getters for director
public function getId_director(): int { 
    return $this->id_director ; 
}
public function getSurname() { 
    return $this->surname; 
}
public function getFirstname() { 
    return $this->firstname; 
}
public function getPhoto(): string { 
    return $this->photo; 
}  

}
?>