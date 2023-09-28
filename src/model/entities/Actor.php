<?php
declare (strict_types = 1);

namespace mvcfilmobjet\Model\entities ;

class Actor {
    private int $id_actor;
    private string $surname ; // Nom de famille
    private string $firstname ; // Prénom
    private string $photo ; 


//Setteurs for actor
public function setId_actor(int $id_actor) { 
    $this->id_actor = $id_actor ; 
    return $this ;
}
public function setSurname(string $surname){ 
    $surname =strtoupper($surname); $this->surname = $surname ; 
    return $this;
}
public function setFirstname(string $firstname) { 
    $this->firstname = $firstname ; 
    return $this; 
}
public function setPhoto(string $photo) { 
    $this->photo = $photo ; 
    return $this ;
}

//Getters for actor
public function getId_actor(): int { 
    return $this->id_actor ; 
}
public function getSurname(): string { 
    return $this->surname; 
}
public function getFirstname(): string { 
    return $this->firstname; 
}
public function getPhoto(): string { 
    return $this->photo; 
}  

}
?>