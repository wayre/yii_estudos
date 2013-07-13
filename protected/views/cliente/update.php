<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
	array('label'=>'View Cliente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
);
?>

<h1>Update Cliente <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>