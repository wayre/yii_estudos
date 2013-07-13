<?php
/* @var $this ProdutoController */
/* @var $model Produto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'produto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'id_produto_grupo'); ?>
		<?php echo $form->textFieldRow($model,'id_produto_grupo'); ?>
		<?php echo $form->error($model,'id_produto_grupo'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'descricao',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'cor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'valor'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'ativo'); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->