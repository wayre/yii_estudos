<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedido', 'url'=>array('index')),
	array('label'=>'Create Pedido', 'url'=>array('create')),
	array('label'=>'View Pedido', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pedido', 'url'=>array('admin')),
);
?>

<h1>Update Pedido <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>