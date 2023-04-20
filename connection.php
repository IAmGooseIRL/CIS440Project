<?php 

class Database {
    public $host = 'cis440project.mysql.database.azure.com'; 
    public $user = 'dingusj'; 
    public $password 'Admin1234'; 
    public $db = 'cis440project'; 
    public $conn; 
    

    function __construct($host, $user, $password, $db) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db; 


        $conn = mysqli_init();

        mysqli_ssl_set($conn, NULL, NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

        mysqli_real_connect($conn, 'cis440project.mysql.database.azure.com', 'dingusj', 'Admin1234', 'cis440project', 3306, NULL, MYSQLI_CLIENT_SSL); 
        // Parameters will change once database is set up

        if (mysqli_connect_errno()) {
            die('Failed to connect to MySQL: '.mysqli_connect_error());
        }
        
        if (mysqli_query($conn, '
           CREATE TABLE `Employee` (
            `First Name` VARCHAR(50) NOT NULL,
            `Last Name` VARCHAR(50) NOT NULL,
            `Date of Birth` DATE(10) NOT NULL,
            `Gender` VARCHAR(50) NOT NULL,
            `Address` VARCHAR(150) NOT NULL,
            `City` VARCHAR(50) NOT NULL,
            `State` VARCHAR(15) NOT NULL,
            `Zip` VARCHAR(9) NOT NULL,
            `Social Security` VARCHAR(9) NOT NULL,
            `Medical` TEXT(500) NOT NULL,
            `Home Phone` VARCHAR(20),
            `Cell Phone` VARCHAR(20),
            `Work Phone` VARCHAR(20),
            `Email` VARCHAR(254) NOT NULL,
            `Id` INT NOT NULL AUTO_INCREMENT
            );
            ')) {
            printf("Table created\n");
        }

        //Close the connection
        mysqli_close($conn);
    }

// $database = new Database();


?>
