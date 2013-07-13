<?php
/* @var $this ClienteTipoController */
/* @var $model ClienteTipo */

$this->breadcrumbs=array(
	'Cliente Tipos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClienteTipo', 'url'=>array('index')),
	array('label'=>'Create ClienteTipo', 'url'=>array('create')),
	array('label'=>'View ClienteTipo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ClienteTipo', 'url'=>array('admin')),
);
?>

<h1>Update ClienteTipo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>