
    <h2>Galéria</h2>


        <p>
            Cras ipsum odio, pellentesque sed tortor sit amet, lobortis ornare nunc. Sed tempor consequat libero, et lacinia tellus finibus a. Nunc at pulvinar eros. Mauris tristique augue nec ex ullamcorper viverra. Proin eget ligula efficitur, interdum lorem at, tempus erat. Mauris ut velit mauris. Suspendisse pharetra nisi a sodales accumsan. Integer blandit ullamcorper est quis ultricies. Nunc elementum eleifend tortor, vel rhoncus quam blandit eu. Mauris accumsan elit et est mattis, quis mattis felis consequat. Donec a sapien eget magna semper posuere et in est. Proin suscipit cursus placerat. Vivamus maximus ligula nec sagittis vulputate. Phasellus pulvinar vehicula elit. Cras hendrerit posuere turpis, vel pulvinar erat scelerisque eget. 
            
        </p>
        
        
    <ul class="gallery">
       <?php
        $db=DatabaseConnection();
        
         $sql = "SELECT * FROM gallery";
         $query = $db-> query($sql);
         $result = $query->fetchAll( PDO:: FETCH_ASSOC);
        
        foreach($result as $record){
                       
                            $id = $record['id'];
                            $path = $record['path'];
                            $title = $record['title'];
                            echo'
        <li>
            <a href="img/'.$path.'" target="_blank" data-fancybox="gallery">
            <img src=img/thumb/'.$path.' alt="">
            <span>'.$title.'</span>
            </a>
        </li>';}
        
        ?>
        
        </ul>
        