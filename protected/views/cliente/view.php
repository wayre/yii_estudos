<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
	array('label'=>'Update Cliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
);
?>

<h1>View Cliente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_tipo',
		'id_usuario',
		'nome',
		'email',
		'endereco',
		'numero',
		'bairro',
		'cidade',
		'uf',
		'cep',
		'cnpj',
		'cpf',
		'dt_criacao',
		'dt_alteracao',
	),
)); ?>
