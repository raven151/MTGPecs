
                   

                   <h2>Versenyek</h2>
                   
                   <p>
                       Etiam id erat urna. Sed ut consectetur lorem. Pellentesque sed malesuada ex, non porta sem. Proin ultrices augue nec iaculis tincidunt. Suspendisse sed sapien odio. Nam vestibulum, mi vitae scelerisque ultrices, massa purus fermentum est, maximus iaculis dolor eros sit amet ipsum. Quisque malesuada erat consequat urna rhoncus, at auctor ante pretium. 
                   </p>
                   <table>
                    <thead>
                        <tr>
                            <th>Időpont</th>
                            <th>Formátum</th>
                            <th>Helyszín</th>
                            <th>Leírás</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            $db = DatabaseConnection();
                            $sql = "SELECT * FROM competition ORDER BY timing";
                            $query = $db->query($sql);
                            $result = $query->fetchAll( PDO::FETCH_ASSOC );
                            
                            foreach($result as $record){
                                $format = $record['format'];
                                $text = $record['text'];
                                $timing = $record['timing'];
                                $place = $record['place'];
                                
                                
                               
                                echo'  
                                <tr>
                                    <td>'.$timing.'.</td>
                                    <td>'.$format.'</td>
                                    <td>'.$place.'</td>
                                    <td>'.$text.'</td>
                                </tr>';
                                
                            }
                        ?>
                    </tbody>
                </table>