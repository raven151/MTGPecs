</main>
          <?php  
$db = DatabaseConnection();
             $sql = "SELECT * FROM competition WHERE id=2";
                            $query = $db->query($sql);
                            $result = $query->fetchAll( PDO::FETCH_ASSOC );
                            
                            foreach($result as $record){
                                $format = $record['format'];
                                $text = $record['text'];
                                $timing = $record['timing'];
                                $place = $record['place'];
                                $image = $record['image'];}
                                
                            echo'
				<aside>
                    <div class=siderBox>
                    <h2>Aktuális</h2>
                    <h3>Verseny</h3>
                    <div class=border><section>
                    
                    <h4>'.$timing.'</h4>
                    <img src="img/'.$image.'" alt="Nulla imperdiet et orci in vehicula">
                    <p>Helyszín: '.$place.'</p>
                    <p>'.$text.'</p>
                    <p><a href="index.php?page=competitions">Továbbiak</a></p>
                    </section></div>


             
             ';
if(!isset($_GET['read'])){
    
    
     $sql = "SELECT id, title,intro,image FROM article WHERE id=4";
                        $query = $db-> query($sql);
                        $result = $query->fetchAll( PDO:: FETCH_ASSOC);
                        
echo'
					<h3>Cikk</h3>';
				
					
                        
                        foreach($result as $record){
                       
                            $id = $record['id'];
                            $title = $record['title'];
                            $intro = $record['intro'];
                            $image = $record['image'];}
    
						      echo'   <div class=border><section>
                              
						<h4>'.$title.'</h4>
						<img src="img/'.$image.'" alt="Nulla imperdiet et orci in vehicula">
						<p>
							'.$intro.'
						</p>
						<p><a href="index.php?page=articles&read='. $id .'">Bővebben</a></p>
					</section></div>
                             
                        
						
				';
}
else{
    
     $sql = "SELECT id, title,intro,image FROM article WHERE id=4";
                        $query = $db-> query($sql);
                        $result = $query->fetchAll( PDO:: FETCH_ASSOC);
                        
echo'
					<h3>Cikk</h3>';
				
					
                        
                        foreach($result as $record){
                       
                            $id = $record['id'];
                            $title = $record['title'];
                            $intro = $record['intro'];
                            $image = $record['image'];}
    
						      echo'   <div class=border><section>
                              
						<h4>'.$title.'</h4>
						<img src="img/'.$image.'" alt="Nulla imperdiet et orci in vehicula">
						<p>
							'.$intro.'
						</p>
						<p><a href="index.php?page=articles&read='. $id .'">Bővebben</a></p>
					</section></div>
                             
                        
						
				';
    
    
}
					
				
				
echo'
                    
                 
				
				
					
				</aside>';

?>
				</div>
			</div>
		</div>
		
		<footer>
			<div class="centerBox">
				<div class="left">
					<h4>Suspendisse sed sapien odio.</h4>
					<p>Etiam id erat urna. Sed ut consectetur lorem. Pellentesque sed malesuada ex, non porta sem. Aliquam erat volutpat. In ut eleifend urna.</p>
					<p>Cras pulvinar magna eu diam rutrum facilisis. Maecenas egestas a sapien nec rutrum. Fusce vel placerat lacus.</p>
				</div>
				
			</div>
		</footer>
		

	</body>
</html>