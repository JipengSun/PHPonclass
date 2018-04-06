<?php
/**
 * Created by PhpStorm.
 * User: Jipeng
 * Date: 2018/4/6
 * Time: 20:28
 */

class MySQLDatabase
{
public $link = null;
    /**
     * @param $user
     * @param $password
     * @param $database
     * @return mysqli
     */
    public function connect($user, $password, $database)
    {
        $this->link = mysqli_connect($database, $user, $password);
        if (!$this->link) {
            die('Not connected :' . mysqli_connect_error());
        }
        $db = mysqli_select_db($this->link, "imageDB");
        if (!$db) {
            die('Cannot use :' . "imageDB");
        }
        return $this->link;

    }

    public function disconnect()
    {
        mysqli_close($this->link);
    }

}
$db = new MySQLDatabase();
$db->connect("root","","localhost");
$db->disconnect();
?>