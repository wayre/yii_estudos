<?php
/* @var $this PedidoController */
/* @var $data Pedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bairro')); ?>:</b>
	<?php echo CHtml::encode($data->bairro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('uf')); ?>:</b>
	<?php echo CHtml::encode($data->uf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cep')); ?>:</b>
	<?php echo CHtml::encode($data->cep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_criacao')); ?>:</b>
	<?php echo CHtml::encode($data->dt_criacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_alteracao')); ?>:</b>
	<?php echo CHtml::encode($data->dt_alteracao); ?>
	<br />

	*/ ?>

</div>