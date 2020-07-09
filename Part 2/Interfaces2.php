<?php 
interface Iinfo
{ 
    public function do_inform(); 
}
interface Iversion
{ 
    public function get_version();
}
interface ILog extends IInfo, IVersion 
{ 
     public function do_log(); 
} 
class DBConnect implements Ilog
{ 
     public function do_inform() 
    { 
          echo "This is a DBConnect class<br>"; 
    } 
    public function get_version() 
    { 
          echo "Version 1.02<br>";
    } 
    public function do_log() 
    { 
          echo "Logging<br>"; 
    } 
     public function connect() 
    { 
          echo "Connecting to the database<br>"; 
    } 
}
$db = new DBConnect(); 
$db->do_inform();
$db->get_version(); 
$db->do_log(); $db->connect();
?>
