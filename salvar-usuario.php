<?php
    
    switch ($_REQUEST["acao"]) {
                                 
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $contato = $_POST["contato"];
            $senha =password_hash($senha,PASSWORD_DEFAULT); $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios3 (nome,email,contato,senha,data_nasc) VALUES ('{$nome}', '{$email}','{$contato}','{$senha}','{$data_nasc}')";

            $res = $conn->query($sql);
            if($res==true){
                print"<script>alert('Cadastrato com Sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Nao foi possivel Cadastrar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        
            case 'editar':
                
                
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $contato = $_POST["contato"];
                $senha =password_hash($senha,PASSWORD_DEFAULT); $_POST["senha"];
                $data_nasc = $_POST["data_nasc"];
                
                
                

                if($senha !=""){
                    
                $sql = "UPDATE usuarios3 SET

                nome='{$nome}',
                email='{$email}',
                contato='{$contato}',
                senha='{$senha}',
                data_nasc='{$data_nasc}'
                WHERE
                    id=".$_REQUEST["id"];
               
                $res = $conn->query($sql);
            }else{
                $sql = "UPDATE usuarios3 SET

                nome='{$nome}',
                email='{$email}',
                contato='{$contato}',
                data_nasc='{$data_nasc}'
                WHERE
                    id=".$_REQUEST["id"];
               
                $res = $conn->query($sql);
            }
            if($res==true){
                print"<script>alert('Editado com Sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Nao foi possivel Editar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;

            case 'excluir':
            $sql = "DELETE FROM usuarios3 WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true){
                print"<script>alert('Excluido com Sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
                print"<script>alert('Nao foi possivel Excluir');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
    }
?>