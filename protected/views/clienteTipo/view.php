<?php
/* @var $this ClienteTipoController */
/* @var $model ClienteTipo */

$this->breadcrumbs=array(
	'Cliente Tipos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ClienteTipo', 'url'=>array('index')),
	array('label'=>'Create ClienteTipo', 'url'=>array('create')),
	array('label'=>'Update ClienteTipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ClienteTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClienteTipo', 'url'=>array('admin')),
);
?>

<h1>View ClienteTipo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
