<h1>listar usuario</h1>
<?php
    $sql = "SELECT * FROM usuarios2";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    
    if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>"; 
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</td>";
        print "<th>Data de Nascimento</th>";
        print "<th>senha</th>";
        print "<th>ações</th>";
        print "</tr>";
    while ($row = $res->fetch_object()) {
           print "<tr>"; 
           print "<td>".$row->id."</td>";
           print "<td>".$row->nome."</td>";
           print "<td>".$row->email."</td>";
           print "<td>".$row->data_nasc."</td>";
           print "<td>".$row->senha."</td>";

           print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('tem certeza que deseja ecluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"class='btn btn-danger'>Excluir</button>
                  </td>";
           print "</tr>";
    }
        print "</table>";
}else{
        print "<p class='alert alert-danger'>Não Encontrou Resultados!</p>";
}
?>