<?php 

class Db
{
    private $host = 'localhost';
    private $login = 'root';
    private $pass = '';
    private $database = 'homework10';
    private $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli($this->host, $this->login, $this->pass, $this->database);
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }

    public function query($query) // передает SQL запрос, и получаем обьект
    {
        if(!empty($query)) {
            $result = mysqli_query($this->mysqli, $query);
            return $result;
        } else {
            return false;
        }
    }

    public function getData($result)
    {
        if(!empty($result)) {
            $array = array();
            while($res = mysqli_fetch_assoc($result)) {
                $array[] = $res;
            }
            return $array;
        } 
    }

    public function deleteData($table, $area, $value)
    {
        $this->query("DELETE FROM $table WHERE $area=$value"); 
    }

    public function updateData($table, $area, $newValue, $areaWhere, $value)
    {
        $this->query("UPDATE $table SET $area='$newValue' WHERE $areaWhere='$value'");
    }

    public function countData($table) 
    {
        if(!empty($table)) {
            $res = $this->query("SELECT COUNT('id') FROM $table");
            $arr = mysqli_fetch_assoc($res);
            if($arr["COUNT('id')"] == 0) {
                return 0;
            } else {
                return $arr["COUNT('id')"];
            }
        } else {
            return false;
        }
    }

    public function clearTable($table) // очистка одной таблицы в БД
    {
        if(!empty($table)) {
            $this->query("TRUNCATE TABLE $table"); 
        } else {
            return false;
        }
    }

    public function clearAllTables() // очистка всех таблиц в БД
    {
        $result = $this->query("SHOW TABLES FROM $this->database");
        $row = $this->getData($result);
        foreach($row as $r) {
            $myrow[] = $r["Tables_in_$this->database"];

            foreach($myrow as $table) {
                $this->query("TRUNCATE TABLE $table");
            }
        }
    }
}

$db = new Db();



// тестовые команды

//echo "<pre>";

//$result = $db->query("SELECT id, login, name FROM users");
//var_dump($result);
//print_r($db->getData($result));
//print_r($db->countData('users'));

//echo "</pre>";

//$db->updateData('users', 'login', 'azazazaza', 'id', '1' );
//$db->deleteData('users', 'id', '1');
//$db->clearTable('users');
//$db->clearAllTables(); 

 ?>