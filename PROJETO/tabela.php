<table class="table table-striped table-hover table-condensed">
  <thead>
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>CPF</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody> 
  <?php 
      include_once 'conexao.php';
    
      $result = mssql_query("SELECT * FROM VW_ENTIDADES_CADASTRADAS");
      while ($row = mssql_fetch_array($result)) 
      mssql_close ($conn);
    ?>                  
    <tr>
      <td><input type='hidden' id='ID_ENTIDADE' name='ID_ENTIDADE' value='{$row[ID_ENTIDADE]}'>{$row[ID_ENTIDADE]</input></td>
      <td><input type='hidden' id='NOMEENTIDADE' name='NOMEENTIDADE' value='$row[NOMEENTIDADE]'>$row[NOMEENTIDADE]</input></td>
      <td><input type='hidden' id='CPF' name='CPF' value='$row[CPF]'>$row[CPF]</input></td>
      <td>
        <button id='sel_entidade' name='sel_entidade' class='btn-xs btn-success' placeholder='' type='submit' onclick='javascript:alimentarCampo();' data-dismiss='modal' aria-hidden='true'>
            Selecionar
        </button>
       </td>
      <td><button id='edit_entidade' name='edit_entidade' class='btn-xs btn-danger' placeholder=''>Editar</button></td>
    </tr>
  </tbody>
</table>