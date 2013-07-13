	<?php $this->beginContent('//layouts/main'); ?>
	    <!--linha breadcrumb -->
		<div class="row-fluid">
		    <?php if(isset($this->breadcrumbs))
		        $this->widget('application.components.BreadCrumb', array(
		          'links'=>$this->breadcrumbs,
		          'separator'=>'<li class="divider">/</li>',
		        ));
		    ?>
		</div>

		<!-- conteudo pagina -->
		<div id="content" class="row-fluid">
			<?php echo $content; ?>
		</div>
	<?php $this->endContent(); ?>