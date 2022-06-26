<?php
foreach($events as $eventss){
            
            echo('
                <div class="min_box">
                    <div class="box_img">
                        <img  src="./../src/views/img_denu/'.$events[$i][5].' " alt="Logo">
                    </div>

                    <div class="for">
                        <h1 style="color:black; ">Lixo tipo:</h1>
                        <h1> '.$events[$i][2].' </h1>
                        <p>'.$events[$i][1].'</p>
                        <p>'.$events[$i][3].'</p>
                        <p>'.$events[$i][6].'</p>
                         <p>'.$events[$i][4].'</p>
                    </div>
                </div>'
            );
            $i ++;
             }