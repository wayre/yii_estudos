<?php
/* @var $this ClienteTipoController */
/* @var $model ClienteTipo */
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
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textFieldRow($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->