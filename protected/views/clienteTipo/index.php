<?php
/* @var $this ClienteTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cliente Tipos',
);

$this->menu=array(
	array('label'=>'Create ClienteTipo', 'url'=>array('create')),
	array('label'=>'Manage ClienteTipo', 'url'=>array('admin')),
);
?>

<h1>Cliente Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
