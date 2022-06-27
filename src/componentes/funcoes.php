<?php
function renderizar_box_denuncias($events1){
    $i = 0;
    
        foreach($events1 as $events1s){
            
            echo('
                <div class="min_box">
                    <div class="box_img">
                        <img  src="./../views/img_denu/'.$events1[$i][5].' " alt="Logo">
                    </div>
                
                    <div class="for">
                        
                        <div class="container_elements"> 
                            <label for="">Tipo:</label>
                            <p>'.$events1[$i][2].'</p>
                        </div>
                    
    
                        <div class="container_elements"> 
                            <label for="">Região:</label>
                            <p>'.$events1[$i][1].'</p>
                        </div>
    
                        <div class="container_elements"> 
                            <label for="">CEP da rua:</label>
                            <p>'.$events1[$i][3].'</p>
                        </div>
                        
                        <div class="container_elements"> 
                            <label for="">Data:</label>
                            <p>'.$events1[$i][6].'</p>
                        </div>
                        
                        <div class="container_elements"> 
                            <label for="">Comentarios:</label>
                            <p>'.$events1[$i][4].'</p>
                        </div>
    
                    </div>
                </div>'
            );
        $i ++;
       
        }
   

        if($i<=0){
            echo('<p  style=color:black;>
                Ainda não há nada aqui;</p>'
            );
            return;
        }  
}
// ------------------------------------------------///