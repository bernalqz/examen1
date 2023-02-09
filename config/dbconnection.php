<?php

class Connect{

public static function connection(){

    $connection= new mysqli("localhost","root","bernal","mytable");
    return $connection;
}

}






?>