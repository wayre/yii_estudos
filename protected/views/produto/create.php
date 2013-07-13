<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Produto', 'url'=>array('index')),
	array('label'=>'Manage Produto', 'url'=>array('admin')),
);
?>

<h1>Create Produto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>