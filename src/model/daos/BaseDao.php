<?php
namespace mvcfilmobjet\Model\Daos;
use PDO ;

class BaseDao

{
    protected $db;

    public function __construct() { 
        try 
{ $this->db = new PDO("mysql:host=127.0.0.1;dbname=mvcfilmobjet;charset=UTF8", 'root', '') ;

        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC] ;
        } catch (\PDOException $ex) { exit($ex->getMessage()); }
        }
}
?> 

