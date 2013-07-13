<?php
/* @var $this ProdutoGrupoController */
/* @var $model ProdutoGrupo */

$this->breadcrumbs=array(
	'Produto Grupos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProdutoGrupo', 'url'=>array('index')),
	array('label'=>'Create ProdutoGrupo', 'url'=>array('create')),
	array('label'=>'Update ProdutoGrupo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProdutoGrupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProdutoGrupo', 'url'=>array('admin')),
);
?>

<h1>View ProdutoGrupo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
