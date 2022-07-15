<div class="navbar">

            <div class="box1">
                <a href="./my_dashboard.php"><h1>SMART LOOK</h1></a>
                <div>
                    <div>
                        <form action="./../evento/action/buscar.php" method="post" class="bar" >
                            <label for="">
                            <input type="search" class="search_bar" name="buscar" id="placeholder-text" placeholder="Buscar Região:" required></label>
                            <button class="search-btn" type="submit">
                                <span class="material-symbols-outlined" >search</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

             
                    
           

            <div class="perfil">     
                <a  href="./../views/perfil_edit.php">
                <?php
                require_once('./../evento/action/conexao.php');

                $database = new Database();
                $db = $database->conectar();
                
                $cpf=$_SESSION['cpf'];
                $sql_dados_pessoas="Select * from tbl_cadastro_usuarios where cpf='".$cpf."';";

                $sql_dados_pessoas=$db->prepare($sql_dados_pessoas);
                $sql_dados_pessoas->execute();
                $sqlresul_pessoas=$sql_dados_pessoas ->fetchAll();
                    if(empty($sqlresul_pessoas[0][6])){

                        echo(' <img class="imgperfil" src="./../views/img_perfil/img_profile_cadastro.PNG" alt="Perfil">');
                    }else{
                        echo(' <img class="imgperfil" src="./../views/img_perfil/'.$sqlresul_pessoas[0][6].'" alt="Perfil">');
                    }
                ?>
                   
                </a>
               <a a href="./../views/perfil_edit.php"> <?php echo($_SESSION['nome']) ?> </a>

                <ul class="menu">
                    <li>
                        <a href="#">
                            <span class="material-symbols-outlined">expand_more</span>
                        </a>
                        <ul>
                            <li> 
                                <a href="./../views/perfil_edit.php">
                                <span class="material-symbols-outlined">person</span>
                                    Editar
                                </a>
                            </li>
                        
                       
                            <li>
                                <a href="./../views/login/sair.php"><span class="material-symbols-outlined">logout</span>
                                Sair
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>