<div class="navbar">

            <div class="box1">
                <img class="imglogo" src="./../../img/Smartlook.png" alt="Logo">
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

            <div>
                <p class="perfil_p">Bem vindo, <?php echo($_SESSION['nome']) ?></p>
                    
            </div>

            <div class="perfil">     
                <img class="imgperfil" src="./../../img/perfil.jfif" alt="Perfil">
                <div>
                    <a href="./login/sair.php">Sair</a>
                </div>
            </div>
        </div>