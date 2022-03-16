<?php

require('varGlobal.php');
 class conect{
    protected $_db;

    public function __construct()
    {
        $this->_db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if($this->_db->connect_errno){
            echo "Fallo al conectar la DB " . $this->_db->connect_errno;
            return;
        }
        else{
            $this->_db->set_charset(DB_CHARSET); 
            // echo ":)";
        }
    }
}

?>