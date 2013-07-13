<?php
/* @var $this ProdutoGrupoController */
/* @var $model ProdutoGrupo */

$this->breadcrumbs=array(
	'Produto Grupos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProdutoGrupo', 'url'=>array('index')),
	array('label'=>'Manage ProdutoGrupo', 'url'=>array('admin')),
);
?>

<h1>Create ProdutoGrupo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>