<?php

//controladores/produtos.php

if (isset($_GET['acao'])) {
	$acao = $_GET['acao'];
}else{
	$acao = 'index';
}

switch ($acao) {
	case 'index':
        
        $crud = new
	    $produtos = $crud->getProdutos();
		include '../views/produtos/index.php';
		include '../views/tamplates/cabecalho.php';
		break;
	
	case 'show';
		include '../views/tamplates/cabecalho.php';
		include '../views/produtos/show.php';
		break;
	case 'inserir':
		echo "vc escolheu inserir";
		break;
	default:
		echo "opção invalida";
		break;
}