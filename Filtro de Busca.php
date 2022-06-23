<h1 style="
text-align: center;
height: 7;
margin-top: 150;
margin-botton:70;
"> Consulta de formações </h1>

<body>
    <form method="post">
        <div class="col-lg-3">
            <label for= "NOME">Nome: </label>
            <input class= "form-control" id= "NOME" placeholder="Nome do colaborador" name=
        </div>
</div>
<button type="submit" class="btn btn-primary" style="margin-top: 24;">Buscar</button>
    </form>
    <!--Filtro de busca-->$_COOKIE
    <php>


    $_POST['NOME'];

    if($nome!= ""){
        $lnk = mysql_connect('localhost', 'root', '')
    }
    or die(mysql_error()) ordie ('Nao foi possivel conectar ao') mysql_select_db('db_formacao')
    or die ('Nao foi possivel ao banco de dados selecionado no MySql: ' . mysql_error)

    $sql1 = "SELECT * form formacoes where locate('$nome', NOME)> 0 order by NOME asc"
    $query = mysql_query($sql1) or die(mysql_error());
     if(@mysql_num_rows($query) > 0{ //loop para exibir na página os registros

     })
    </php> 
</body>
