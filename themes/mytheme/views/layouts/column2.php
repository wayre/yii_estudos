<?php $this->beginContent('//layouts/main'); ?>
	<div class="row-fluid">

		<!-- sidebar -->
		<div class="span2" id="sidebar">
			<div class="well">
				<?php 
				$this->widget('bootstrap.widgets.TbMenu', array(
				    'type'=>'list',
				    'items' => array(
						array('label'=>'Clientes', 'itemOptions'=>array('class'=>'nav-header')),
							array('label'=>'Gerenciar Clientes', 'url'=>array('/cliente/admin'),'icon'=>'icon-home'),
							array('label'=>'Novo Cliente', 'url'=>array('/cliente/create'),'icon'=>'icon-home'),

						array('label'=>'Tipos Cliente', 'itemOptions'=>array('class'=>'nav-header')),
							array('label'=>'Gerenciar', 'url'=>array('/clientetipo/admin'),'icon'=>'icon-home'),
							array('label'=>'Novo', 'url'=>array('/clientetipo/create'),'icon'=>'icon-home'),

						array('label'=>'Produtos', 'itemOptions'=>array('class'=>'nav-header')),
							array('label'=>'Gerenciar', 'url'=>array('/produto/admin'),'icon'=>'icon-home'),
							array('label'=>'Novo', 'url'=>array('/produto/create'),'icon'=>'icon-home'),

						array('label'=>'Pedidos', 'itemOptions'=>array('class'=>'nav-header')),
							array('label'=>'Gerenciar', 'url'=>array('/pedido/admin'),'icon'=>'icon-home'),
							array('label'=>'Novo', 'url'=>array('/pedido/create'),'icon'=>'icon-home'),
				    )
				));
				?>
			</div>
		</div>

		<div class="span10">

		    <!--linha breadcrumb -->
			<div class="row-fluid">
			    <?php if(isset($this->breadcrumbs))
			        $this->widget('application.components.BreadCrumb', array(
			          'links'=>$this->breadcrumbs,
			          'separator'=>'<li class="divider">/</li>',
			        ));
			    ?>
			</div>

			<!-- conteudo da pagina -->
			<div id="content" class="row-fluid">
				<?php echo $content; ?>
			</div>
		</div>
</div>
<?php $this->endContent(); ?>