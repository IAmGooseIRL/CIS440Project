<?php 

class Database {
    public $host; 
    public $user; 
    public $password; 
    public $db; 
    public $conn; 

    function __construct($host, $user, $password, $db) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db; 


        $conn = mysqli_init();

        mysqli_ssl_set($conn, NULL, NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

        mysqli_real_connect($conn, 'mydemoserver.mysql.database.azure.com', 'myadmin@mydemoserver', 'yourpassword', 'quickstartdb', 3306, NULL, MYSQLI_CLIENT_SSL); 
        // Parameters will change once database is set up

        if (mysqli_connect_errno()) {
            die('Failed to connect to MySQL: '.mysqli_connect_error());
        }
    }
}

// $database = new Database();


?>