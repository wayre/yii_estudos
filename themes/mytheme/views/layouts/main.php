
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Yii - Estudos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Nobile' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
  </head>

  <body>

    <?php 

    // menu principal do sistema
    $this->widget('bootstrap.widgets.TbNavbar', array(
      'type'=>'inverse', // null or 'inverse'
      'fixed'=>false,
      'brand'=>'Estudos Yii',
      'brandUrl'=>array('site/index'),
      'collapse'=>true, // requires bootstrap-responsive.css
      'items'=>array(
        array(
          'class'=>'bootstrap.widgets.TbMenu',
          'items'=>array(
            array('label'=>'Home', 'url'=>array('site/index'),),
            
            // menu clientes
            array('label'=>'Clientes', 
              'items'=>array(
                  array('label'=>'Novo Cliente', 'url'=>array('/cliente/create')),
                  '',
                  array('label'=>'Gerenciar', 'url'=>array('/cliente/admin')),
                  array('label'=>'Tipos de Clientes', 'url'=>array('/clientetipo/admin')),
              )
            ),
            array('label'=>'Produtos',
              'items'=>array(
                  array('label'=>'Novo Produto', 'url'=>array('/produto/create')),
                  '',
                  array('label'=>'Gerenciar', 'url'=>array('/produto/admin')),
                  array('label'=>'produtos Grupo', 'url'=>array('/produtogrupo/admin')),
              )
            ),
            array('label'=>'Pedidos',
              'items'=>array(
                  array('label'=>'Novo Pedido', 'url'=>array('/pedido/create')),
                  '',
                  array('label'=>'Gerenciar', 'url'=>array('/pedido/admin')),
              )
            ),
            array('label'=>'Sobre', 'url'=>array('site/about')),
          ),
        ),
        array(
          'class'=>'bootstrap.widgets.TbMenu',
          'htmlOptions'=>array('class'=>'pull-right'),
          'items'=>array(
            array('label'=>isset(Yii::app()->user->nome) ? Yii::app()->user->nome : null, 'url'=>'#', 'items'=>array(
              array('label'=>'Configurações', 'url'=>'#'),
              '---',
              array('label'=>'Logout', 'url'=>array('/site/logout')),
            )),
          ),
        ),
      ),
    ));
    ?>

    <div class="container-fluid" id="main-container">
      <!-- conteudo da pagina -->
      <?php echo $content ?>
      
      <hr>

      <footer>
        <p>&copy; Yii - Estudos 2013</p>
      </footer>

    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>