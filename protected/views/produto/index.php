<?php
/* @var $this ProdutoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Produtos',
);

$this->menu=array(
	array('label'=>'Create Produto', 'url'=>array('create')),
	array('label'=>'Manage Produto', 'url'=>array('admin')),
);
?>

<h1>Produtos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
