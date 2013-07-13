<?php
/* @var $this ProdutoGrupoController */
/* @var $model ProdutoGrupo */

$this->breadcrumbs=array(
	'Produto Grupos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProdutoGrupo', 'url'=>array('index')),
	array('label'=>'Create ProdutoGrupo', 'url'=>array('create')),
	array('label'=>'View ProdutoGrupo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProdutoGrupo', 'url'=>array('admin')),
);
?>

<h1>Update ProdutoGrupo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>