<?php
/* @var $this ProdutoController */
/* @var $model Produto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row-fluid">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textFieldRow($model,'id'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'id_produto_grupo'); ?>
		<?php echo $form->textFieldRow($model,'id_produto_grupo'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textFieldRow($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textFieldRow($model,'descricao',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'cor'); ?>
		<?php echo $form->textFieldRow($model,'cor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textFieldRow($model,'valor'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'ativo'); ?>
		<?php echo $form->textFieldRow($model,'ativo'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'dt_criacao'); ?>
		<?php echo $form->textFieldRow($model,'dt_criacao'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'dt_alteracao'); ?>
		<?php echo $form->textFieldRow($model,'dt_alteracao'); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->