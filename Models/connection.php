<?php 
    define('URL','http://localhost:8088/baeshop.com/');
    class connection{
        var $conn;
        function __construct()
        {
            //Thong so ket noi CSDL
            $severname ="localhost"; 
            $username ="root";
            $password =""; 
            $db_name ="baeshop";
 
            //Tao ket noi CSDL
            $this->conn = new mysqli($severname,$username,$password,$db_name);
            $this->conn->set_charset("utf8");
            //check connection
            if ($this->conn->connect_error) {
		        die("Connection failed: " . $this->conn->connect_error);
		    }
        }

    }
?>