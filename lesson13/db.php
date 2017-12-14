<?php 

class Db
{
    public $host = 'localhost';
    public $login = 'root';
    public $pass = '';
    public $db_name = 'myCMS';

    public function __construct()
    {
        if(!empty($this->host) && !empty($this->login) && !empty($this->db_name)) {

            $this->link = mysqli_connect($this->host, $this->login, $this->pass, $this->db_name);

            if (!$this->link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
            return $this->link;
        } else {
            return false;
        }
    }

    public function __destruct()
    {
        mysqli_close($this->link);
    }

    public function query($link, $query) // передает SQL запрос, и получаем обьект
    {
        if(isset($link) && !empty($query)) {
            $result = mysqli_query($this->link, $query);
            return $result;
        } else {
            return false;
        }
    }

    public function getData($result) // передаем в метод результат после SQL запроса, получаем массив из передаваемого обьекта
    {
        if(!empty($result)) {
            $array = array();
            while($res = mysqli_fetch_assoc($result)) {
                $array[] = $res;
            }
            return $array;
        } 
    }

    public function deleteData($link, $table, $area, $value)
    {
        $this->query($this->link, "DELETE FROM $table WHERE $area=$value"); 
    }

    public function updateData($link, $table, $area, $newValue, $areaWhere, $value)
    {
        $this->query($this->link, "UPDATE $table SET $area='$newValue' WHERE $areaWhere='$value'");
    }

    public function countData($link, $table, $area)
    {
        if(!empty($link) && !empty($area) && !empty($table)) {
            $res = $this->query($this->link, "SELECT COUNT('$area') FROM $table");
            $arr = mysqli_fetch_assoc($res);
            return $arr["COUNT('$area')"];
        } else {
            return false;
        }
    }

    public function clearTable($link, $table)
    {
        if(!empty($link) && !empty($tableName)) {
            $this->query($this->link, "TRUNCATE TABLE $table"); 
        } else {
            return false;
        }
    }

    public function clearAllTables($link)
    {
        if(!empty($link)) {
            $sql = "SHOW TABLES FROM $this->db_name";
            $result = mysqli_query($this->link, $sql);
            $row = $this->getData($result);
            foreach($row as $r) {
                $myrow[] = $r["Tables_in_$this->db_name"];

                foreach($myrow as $table) {
                    $this->query($this->link, "TRUNCATE TABLE $table");
                }
            }
        }
    }

}

$db = new Db();




// тестовые команды

//echo "<pre>";
//$result = $db->query($db->link, "SELECT id, login, name FROM users");
//print_r($db->getData($result));
//print_r($db->countData($db->link, 'users', 'id'));
//echo "</pre>";

//$db->updateData($db->link, 'users', 'login', 'azazazaza', 'id', '1' );
//$db->deleteData($db->link, 'users', 'id', '1');
//$db->clearTable($db->link, 'users');
//$db->clearAllTables($db->link); 

 ?>