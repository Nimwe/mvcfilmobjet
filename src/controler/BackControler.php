<?php 
namespace mvcfilmobjet\Controler;
use mvcfilmobjet\Model\services\ActorService;
use mvcfilmobjet\Model\services\DirectorService;
use mvcfilmobjet\Model\services\TypeService;

class BackControler {

private $ActorService;
private $DirectorService;
private $TypeService;

    public function __construct() { 
        $this->ActorService = new ActorService();
        $this->DirectorService = new DirectorService();
        $this->TypeService = new TypeService();
    }
    
// Create    
    public function addActor($actorData) { 
        $this->ActorService->create($actorData); 
    }
    public function addDirector($directorData) {
     $this->DirectorService->create($directorData); 
    }
    public function addType($typeData) { 
        $this->TypeService->create($typeData); 
    }
// Update   
    public function updateActor($actorData) { 
        $this->ActorService->update($actorData); 
    }
    public function updateDirector($directorData) { 
        $this->DirectorService->update($directorData); 
    }
    public function updateType($typeData) { 
        $this->TypeService->update($typeData); 
    }
// Delete
    public function deleteActor($actorData) { 
        $this->ActorService->delete($actorData); 
    }
    public function deleteDirector($directorData) { 
        $this->DirectorService->delete($directorData); 
    }
    public function deleteType($typeData) { 
        $this->TypeService->delete($typeData); 
    }
}
?> 