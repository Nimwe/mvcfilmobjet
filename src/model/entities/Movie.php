<?php
declare (strict_types = 1);

Class Movie {
    private array $actor;
    private array $director;
    private array $type;

public function __construct($ac, $di, $ty)
  { $this-> actor = $ac;
    $this-> director = $di ;
    $this-> type = $ty ; }

public function setActor($actor) : Movie
{ $this->actor = $ac ; return $this ; }
public function setDirector($director) : Movie
{ $this->director = $di ; return $this ; }
public function setType($type): Movie
{ $this->type = $ty ; return $this ;}

public function getActor() : Actor
{ return $this->actor ; }
public function getDirector() : Director
{return $this->director ; }
public function getType() : Type
{return $this->type ;}

public function addActor(Actor $ac) : Actor
{ $this-> actor[]= $ac ; return $this ; }
public function AddDirector(Director $di): Director
{ $this->director[]= $di ; return $this ; } 
public function AddType(Type $type) : Type
{ $this->type[]= $type ; return $this ; }

}
?>