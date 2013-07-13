<?php
/* @var $this ProdutoController */
/* @var $data Produto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_produto_grupo')); ?>:</b>
	<?php echo CHtml::encode($data->id_produto_grupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cor')); ?>:</b>
	<?php echo CHtml::encode($data->cor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ativo')); ?>:</b>
	<?php echo CHtml::encode($data->ativo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_criacao')); ?>:</b>
	<?php echo CHtml::encode($data->dt_criacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_alteracao')); ?>:</b>
	<?php echo CHtml::encode($data->dt_alteracao); ?>
	<br />

	*/ ?>

</div>