<?php

require_once '../model/CategoriaCrud.php';

$crud = new CategoriaCrud();
$cat1 = $crud->getCategoria(1);

//var_dump($cat1);
$cats = $crud->getCategorias();
var_dump($cats);
$cat1 = new Categoria();
$cat1->setNome('Celulares');
$cat1->setDescricao('Celulares');
$r = $crud->insertCategoria($cat1);
print $r;