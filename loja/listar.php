<?php
    include 'cabecalho';
?>
<body>
    <h1>Bem vindo ao 1º Sistema com CRUD</h1>
    <h2>Anderson Vanin</h2>
    <div class="container">
        <table class="table"></table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">PREÇO</th>
                <th scope="col">QUANTIDADE</th>
                <th scope="col">OPÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <tr scope="row">1</tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="#" type="button" class="btn btn-danger">Atualizar </a>
                    <a href="#" type="button" class="btn btn-danger">Apagar </a>

                </div>
            </td>
        </tbody>    
        </table>
    </div>
 </body>
</html>