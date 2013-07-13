<?php
/* @var $this ClienteTipoController */
/* @var $model ClienteTipo */

$this->breadcrumbs=array(
	'Cliente Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClienteTipo', 'url'=>array('index')),
	array('label'=>'Manage ClienteTipo', 'url'=>array('admin')),
);
?>

<h1>Create ClienteTipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>