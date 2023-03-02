<?php

    class Database
    {
        public $db;

        public function connect(){
            $this->db =  new mysqli("localhost","root","","quiz_db");

            if(!$this->db) throw "Error, Cant connect to database";
        }
        
    }
    
?>