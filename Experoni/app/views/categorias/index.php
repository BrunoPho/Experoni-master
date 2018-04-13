<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2> Listagem de Categorias </h2>

      <table>
      	<th>       #           </th>
      	<th> Nome da Categoria </th>
      </table>
     <tbody>
  
  <?php foreach ($Categorias as $Categoria) : ?>
  	
   <tr>
    <td><?= $Categoria->getId()   ?> </td>
    <td><?= $Categoria->getNome() ?> </td>
   </tr>

  <?php endforeach; ?>

  
     </tbody>

</body>
</html>