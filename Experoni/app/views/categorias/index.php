<!DOCTYPE html>
<html>
<head>
	<title> index </title>
</head>
<body>

	<h2> Listagem de Categorias </h2>

      <table>
       <tr>
      	<th>       #           </th>
      	<th> Nome da Categoria </th>
       </tr>
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