<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Clientes</h1>

<p>
Você pode, opcionalmente, utilizar operadores de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) no início de cada um dos seus valores de pesquisa para especificar como a comparação deve ser feita.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
	'id'=>'cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_tipo',
		'id_usuario',
		'nome',
		'email',
		'endereco',
		/*
		'numero',
		'bairro',
		'cidade',
		'uf',
		'cep',
		'cnpj',
		'cpf',
		'dt_criacao',
		'dt_alteracao',
		*/
  //       array(
  //           'header' => 'A&ccedil;&otilde;es',
  //           'class'=>'bootstrap.widgets.TbButtonColumn',
  //           'htmlOptions'=>array('class'=>'span3'),
  //           'template'=>'{view}{update}{delete}',
		// ),
		array(
			'htmlOptions' => array('nowrap'=>'nowrap'),
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl'=>null,
			'updateButtonUrl'=>null,
			'deleteButtonUrl'=>null,
		),
		array(
			'class'=>'CButtonColumn',
            'htmlOptions'=>array('class'=>'span2'),
		),
	),
)); ?>
