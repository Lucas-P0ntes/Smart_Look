<?php
session_start();
require_once('conexao.php');
require_once('funcoa_validacao.php');
$database = new Database();
$db = $database->conectar();


if( isset($_POST['nome'])  && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['senha1']) && isset($_POST['senha2'])&& isset($_POST['cpf'])){  
    $nomes =$_POST['nome'];
    $nome_completo=$_POST['nome_completo'];
    $emails =$_POST['email'];
    $tels=$_POST['tel'];
    $senha1s =$_POST['senha1'];
    $senha2s =$_POST['senha2'];
    
    if((!empty($nomes)  && !empty($emails)  && !empty($tels)  && !empty($senha1s)  && !empty($senha2s)  )){

        if(valida_nome($nomes)){
            if(valida_email($emails)){
                if(valida_tel($tels)){
                    if(valida_pass($senha1s,$senha2s)){
                        
                                            
                            $nome = $_POST['nome'];
                            $email = $_POST['email'];
                            $tel= $_POST['tel'];
                            $senha = $_POST['senha1'];
                            $cpf = $_POST['cpf'];
                            $nome_completo=$_POST['nome_completo'];
                            
                            $sql_cadastro_login ="UPDATE  tbl_cadastro_usuarios SET nome='".$nome."', nome_completo='".$nome_completo."',  email='".$email."', tel_number='".$tel."' , password='".$senha."' WHERE cpf='".$cpf."';";
                            $query_cadastro = $db->prepare( $sql_cadastro_login );
                            $query_cadastro->execute();

                            $sql_cadastro_login ="UPDATE  tbl_login SET nome='".$nome."', password='".$senha."' WHERE cpf='".$cpf."';";
                            $query_cadastro_login = $db->prepare( $sql_cadastro_login );
                            $query_cadastro_login->execute();

                            header('Location: ./../../views/perfil_edit.php');

                       

                    }else{
                        $_SESSION['erro_pass']="As senhas não são iguais;";
                        header('Location: ./../../views/perfil_edit.php');
                    }
                }else{
                    $_SESSION['erro_tel']="O formato do telefone está errado;";
                    header('Location: ./../../views/perfil_edit.php');
                }
            }else{
                $_SESSION['erro_email']="O formato do e-mail está errado;";
                header('Location: ./../../views/perfil_edit.php');
            }

        }else{
            $_SESSION['erro_nome']="O nome está no formato errado;";
            header('Location: ./../../views/perfil_edit.php');
        }

    }else{
        $_SESSION['erro_vazio']="Algum dos campo foi enviado vazio;";
        header('Location: ./../../views/perfil_edit.php');
    }

    
    
    
}

//  header('Location: ./../../views/login/cadastrar.php');