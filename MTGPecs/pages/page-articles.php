<!-- MAIN CONTENT -->
                				
					
				<?php

$db=DatabaseConnection();
if(!isset($_GET['read'])){
    
    
     $sql = "SELECT id, title,intro,image FROM article ORDER BY id DESC";
                        $query = $db-> query($sql);
                        $result = $query->fetchAll( PDO:: FETCH_ASSOC);
                        
echo'
					<h2>Saját publikációk</h2>
				
					<ul class="articles">';
                        
                        foreach($result as $record){
                       
                            $id = $record['id'];
                            $title = $record['title'];
                            $intro = $record['intro'];
                            $image = $record['image'];
						      echo'<li class="preview">
				
							<img src="img/'.$image.'" alt="Mauris ac nisi felis">
							
							<div>
								<h3>'.$title.'</h3>
								<p>'.$intro.'</p>
							</div>
							<a href="index.php?page=articles&read='. $id .'">Bővebben</a>
						
						</li>';
                                
                             
                        }
						
				echo'	</ul>';
}
else{
     
    $read = $_GET['read'];
    $sql = "SELECT * FROM article WHERE id=:id";
                        $query = $db-> prepare($sql);
                        $query -> execute(['id' => $read]);
                        $record = $query->fetch( PDO:: FETCH_ASSOC);
    if($record)
   { 
    
   
    $title = $record['title'];
    $intro = $record['intro'];
    $image = $record['image'];
    $text = $record['text'];
    echo'           <h2>'.$title.'</h2>';
					
					echo'<article>';
						
						echo'<h3 class="lead">'.$intro .' </h3>';
						
						echo'<img src="img/'.$image.'" alt="Mauris ac nisi felis">';
						
						echo'<p>'.nl2br($text).'</p>';
						
						
						
					echo'</article>';

    
    }
    
    
    else
    {echo'           <h1>Nincs ilyen</h1>';
     echo'<p>A cikk nem található</p>';
        
    }
}
					
				
				
?>
	<!-- END: MAIN CONTENT -->
