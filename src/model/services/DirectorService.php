<?php
 
namespace mvcfilmobjet\Model\services ;
use mvcfilmobjet\Model\Daos\DirectorDao;
 

class DirectorService {

    private $directorDao ;
    public function __construct() {
        $this -> directorDao = new DirectorDao();
    }

//Create a director
    public function create($directorData) {
        $director =  $this->directorDao->createObjectFromFields($directorData);
        $this->directorDao->create($director);
    }
//Read all directors
    public function getAllDirectors() { 
        $directors = $this->directorDao->findAll();
        return $directors ;
    }
//Read on director   
    public function getOneDirector($id_director) { 
        $director = $this->directorDao->findOne($id_director);
        return $director ;
    }
//Update an Director
    public function update($directorData) {
        $director = $this->directorDao->createObjectFromFields($directorData);
        $this->directorDao->updateDirector($director);
    }
//Delete a director
    public function delete($id_director) {
        $director = $this->directorDao->deleteDirector($id_director);
        $this->directorDao->deleteDirector($director);
    }
}
?>