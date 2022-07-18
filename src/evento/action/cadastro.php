<?php
session_start();
require_once('conexao.php');
require_once('funcoa_validacao.php');
$database = new Database();
$db = $database->conectar();


if( isset($_POST['nome']) && isset($_POST['nome_completo'])  && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['senha1']) && isset($_POST['senha2'])&& isset($_POST['cpf'])){  
    $nomes =$_POST['nome'];
    $nome_completos =$_POST['nome_completo'];
    $emails =$_POST['email'];
    $tels=$_POST['tel'];
    $senha1s =$_POST['senha1'];
    $senha2s =$_POST['senha2'];
    $cpfs=$_POST['cpf'];
    

    if((!empty($nomes)  && !empty($nome_completos) && !empty($emails)  && !empty($tels)  && !empty($senha1s)  && !empty($senha2s)  && !empty($cpfs))){

        if(valida_nome($nomes)){
            if(valida_email($emails)){
                if(valida_tel($tels)){
                    if(valida_pass($senha1s,$senha2s)){
                        if(valida_cpf($cpfs)){
                            $nome_completo =$_POST['nome_completo'];          
                            $nome = $_POST['nome'];
                            $email = $_POST['email'];
                            $tel= $_POST['tel'];
                            $senha1 = $_POST['senha1'];
                            $cpf = $_POST['cpf'];
                            $senha=md5($senha1);
                            
                            $sql_cadastro ="INSERT INTO tbl_cadastro_usuarios (nome, nome_completo, email, tel_number, cpf, password) values ('$nome', '$nome_completo', '$email', '$tel','$cpf', '$senha'  );";
                            $query_cadastro = $db->prepare( $sql_cadastro );
                            $query_cadastro->execute();

                            $sql_cadastro_login ="INSERT INTO tbl_login (nome, cpf, password) values ('$nome','$cpf', '$senha' );";
                            $query_cadastro_login = $db->prepare( $sql_cadastro_login );
                            $query_cadastro_login->execute();

                            header('Location: ./../../views/login/login.php');

                        }else{
                            $_SESSION['arry_error']='O CPF está errado ou já existe no sistema';
                            header('Location: ./../../views/login/cadastrar.php');
                        }
                    }else{
                        $_SESSION['arry_error']='As senhas não são iguais';
                        header('Location: ./../../views/login/cadastrar.php');
                    }
                }else{
                    $_SESSION['arry_error']='O formato do telefone está errado';
                    header('Location: ./../../views/login/cadastrar.php');
                }
            }else{
                $_SESSION['arry_error']='O formato do e-mail está errado';
                header('Location: ./../../views/login/cadastrar.php');
            }
        }else{
            $_SESSION['arry_error']='O nome está no formato errado';
            header('Location: ./../../views/login/cadastrar.php');
        }
    }else{
        $_SESSION['arry_error']='Algum dos campo foi enviado vazio';
        header('Location: ./../../views/login/cadastrar.php');
    }
    
}
