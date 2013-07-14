<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
		<div class="span2">
			<?php echo $form->textFieldRow($model,'id', array('disabled'=>true, 'class'=>'span12')); ?>
		</div>
		<div class="span3">
			<?php echo $form->textFieldRow($model,'id_usuario', array('readonly'=>true, 'value'=> Yii::app()->user->id, 'class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span5"><?php echo $form->textFieldRow($model,'nome',array('class'=>'span12','maxlength'=>60)); ?></div>
		
		<!-- select dos tipos de cliente -->
		<div class="span3">
			<?php echo $form->dropDownListRow($model,'id_tipo', $array_tipos_cli, array('prompt'=>'Selecione')); ?>
		</div>
		
		<div class="span4"><?php echo $form->textFieldRow($model,'email',array('class'=>'span12','maxlength'=>60)); ?></div>
	</div>

	<div class="row-fluid">
		<div class="span2">
			<?php echo $form->textFieldRow($model,'cep',array('size'=>10,'maxlength'=>10, 'class'=>'span12')); ?>
		</div>
		<div class="span9">
			<?php echo $form->textFieldRow($model,'endereco',array('size'=>60,'maxlength'=>60, 'class'=>'span12')); ?>
		</div>
		<div class="span1">
			<?php echo $form->textFieldRow($model,'numero',array('size'=>6,'maxlength'=>6, 'class'=>'span12')); ?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<?php echo $form->textFieldRow($model,'bairro',array('size'=>60,'maxlength'=>60, 'class'=>'span12')); ?>
		</div>
		<div class="span4">
			<?php echo $form->textFieldRow($model,'cidade',array('size'=>60,'maxlength'=>60, 'class'=>'span12')); ?>
		</div>
		<div class="span2">
			<?php echo $form->textFieldRow($model,'uf',array('size'=>2,'maxlength'=>2, 'class'=>'span12')); ?>
		</div>
	</div>


	<div class="row-fluid">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'cnpj',array('size'=>18,'maxlength'=>18, 'class'=>'span12')); ?>
		</div>
		<div class="span4">
			<?php echo $form->textFieldRow($model,'cpf',array('size'=>14,'maxlength'=>14, 'class'=>'span12')); ?>
		</div>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->