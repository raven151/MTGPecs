<?php
function PrintMenu(){
    
    echo'           <li><a href="index.php">Főoldal</a></li>
					<li><a href="index.php?page=competitions">Versenyek</a></li>
					<li><a href="index.php?page=articles">Cikkek</a></li>
					<li><a href="index.php?page=gallery">Galéria</a></li>
                   <li> <A HREF = "https://www.cardmarket.com/en/Magic/Users/Moltras">CardMarket</A></li>
                   <li> <A HREF = "https://www.facebook.com/groups/206269942733569">Facebook</A></li>
                   
					';
}


function DatabaseConnection(){
    $dsn ="mysql:host=localhost;dbname=magic;charset=utf8mb4";
    $user="admin";
    $pass="admin";
    $db = new PDO($dsn, $user, $pass);
    return $db;
    
    
}

?>
