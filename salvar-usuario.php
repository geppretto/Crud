<?php
    
    switch ($_REQUEST["acao"]) {
                                 
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = ($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios2 (nome,email,senha,data_nasc) VALUES ('{$nome}', '{$email}','{$senha}','{$data_nasc}')";

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
                $senha = ($_POST["senha"]);
                $data_nasc = $_POST["data_nasc"];
                if($senha !=""){

                $sql = "UPDATE usuarios2 SET

                nome='{$nome}',
                email='{$email}',
                senha='{$senha}',
                data_nasc='{$data_nasc}'
                WHERE
                    id=".$_REQUEST["id"];
               
                $res = $conn->query($sql);
            }else{
                $sql = "UPDATE usuarios2 SET

                nome='{$nome}',
                email='{$email}',
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
            $sql = "DELETE FROM usuarios2 WHERE id=".$_REQUEST["id"];

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