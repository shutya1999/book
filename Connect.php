<?php
/**
 * Created by PhpStorm.
 * User: romai
 * Date: 19.02.2020
 * Time: 16:10
 */

class Connect
{
    public $driver = 'mysql';
    public $host = 'localhost';
    public $db_name = 'book';
    public $db_user = 'root';
    public $db_pass = '';
    public $charset = 'utf8';
    public $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    public function getConnect(){
        $driver=$this->driver;
        $host=$this->host;
        $db_name=$this->db_name;
        $db_user=$this->db_user;
        $db_pass=$this->db_pass;
        $charset=$this->charset;
        $option=$this->option;
        try {
//            echo "Akey";
            return $pdo = new PDO("$driver:host=$host; dbname=$db_name;charset=$charset",$db_user,$db_pass,$option);
        }catch (PDOException $e)
        {
            die("Не могу подключится к БД");
        }
    }

}
