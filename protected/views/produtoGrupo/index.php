<?php
/* @var $this ProdutoGrupoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Produto Grupos',
);

$this->menu=array(
	array('label'=>'Create ProdutoGrupo', 'url'=>array('create')),
	array('label'=>'Manage ProdutoGrupo', 'url'=>array('admin')),
);
?>

<h1>Produto Grupos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
