<?php
session_start();
require_once('conexao.php');
require_once('funcoa_validacao.php');
$database = new Database();
$db = $database->conectar();


if( isset($_POST['nome'])  && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['senha1']) && isset($_POST['senha2'])&& isset($_POST['cpf'])){  
    $nomes =$_POST['nome'];
    $emails =$_POST['email'];
    $tels=$_POST['tel'];
    $senha1s =$_POST['senha1'];
    $senha2s =$_POST['senha2'];
    $cpfs=$_POST['cpf'];
    
    if((!empty($nomes)  && !empty($emails)  && !empty($tels)  && !empty($senha1s)  && !empty($senha2s)  && !empty($cpfs))){

        if(valida_nome($nomes)){
            if(valida_email($emails)){
                if(valida_tel($tels)){
                    if(valida_pass($senha1s,$senha2s)){
                        if(valida_cpf($cpfs)){
                                            
                            $nome = $_POST['nome'];
                            $email = $_POST['email'];
                            $tel= $_POST['tel'];
                            $senha = $_POST['senha1'];
                            $cpf = $_POST['cpf'];
                            
                        
                            $sql_cadastro ="INSERT INTO pessoas (id_pessoas, nome, email, number, senha, cpf) values (null, '$nome', '$email', '$tel', '$senha' ,'$cpf' );";
                            $query_cadastro = $db->prepare( $sql_cadastro );
                            $query_cadastro->execute();

                        }else{

                            $_SESSION['erro_cpf']="O CPF está errado;";
                        }

                    }else{
                        $_SESSION['erro_pass']="As senhas não são iguais;";
                    }
                }else{
                    $_SESSION['erro_tel']="O formato do telefone está errado;";
                }
            }else{
                $_SESSION['erro_email']="O formato do e-mail está errado;";
            }

        }else{
            $_SESSION['erro_nome']="O nome está no formato errado;";
        }

    }

    
    
    
}

 header('Location: ./../../views/login/cadastrar.php');