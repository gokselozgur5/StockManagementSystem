<?php 

try {
        $db=new PDO("mysql:host=localhost;dbname=cims;charset=utf8", 'root', 'q1w2e3r4');
        
}

catch (PDOExpxception $e) {


    echo $e->getMessage();


}


?>