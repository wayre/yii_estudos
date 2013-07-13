<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pedido', 'url'=>array('index')),
	array('label'=>'Manage Pedido', 'url'=>array('admin')),
);
?>

<h1>Create Pedido</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>