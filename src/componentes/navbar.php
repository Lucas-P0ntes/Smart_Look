<div class="navbar">

            <div class="box1">
                <a href="./dashboard.php"><h1>SMART LOOK</h1></a>
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
                <img class="imgperfil" src="./../../img/perfil.jfif" alt="Perfil">
                <?php echo($_SESSION['nome']) ?>

                <ul class="menu">
                    <li>
                        <a href="#">
                            <span class="material-symbols-outlined">expand_more</span>
                        </a>
                        <ul>
                            <li><a href="./../views/login/sair.php">Sair</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>