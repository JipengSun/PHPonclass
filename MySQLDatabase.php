<?php
/**
 * Created by PhpStorm.
 * User: Jipeng
 * Date: 2018/4/6
 * Time: 20:28
 */

class MySQLDatabase
{
    $link;
    function connect($user, $password, $database)
    {
        $this->link = mysqli_connect($database, $user, $password);
        if (!$this->link) {
            die('Not connected :' . mysqli_connect_error());
        }
        $db = mysqli_select_db($this->$this->link, $database);
        if (!$db) {
            die('Cannot use :' . $database);
        }
        return $this->link;

    }

    function disconnect()
    {
        mysqli_close($this->link);
    }

}