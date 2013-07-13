<?php
/* @var $this ProdutoGrupoController */
/* @var $model ProdutoGrupo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'produto-grupo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'nome',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->