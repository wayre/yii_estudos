<?php
/* @var $this PedidoController */
/* @var $model Pedido */
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
		<?php echo $form->label($model,'id_cliente'); ?>
		<?php echo $form->textFieldRow($model,'id_cliente'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textFieldRow($model,'id_usuario'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'endereco'); ?>
		<?php echo $form->textFieldRow($model,'endereco',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textFieldRow($model,'numero',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'bairro'); ?>
		<?php echo $form->textFieldRow($model,'bairro',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'cidade'); ?>
		<?php echo $form->textFieldRow($model,'cidade',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'uf'); ?>
		<?php echo $form->textFieldRow($model,'uf',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->label($model,'cep'); ?>
		<?php echo $form->textFieldRow($model,'cep',array('size'=>10,'maxlength'=>10)); ?>
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