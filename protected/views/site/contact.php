<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'name'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'email'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textFieldRow($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row-fluid">
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textFieldRow($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
	</div>
	<?php endif; ?>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>