<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'pedido-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php echo $form->textFieldRow($model,'id_cliente'); ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textFieldRow($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'endereco',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'numero',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'bairro',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'cidade',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'uf',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'cep',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->