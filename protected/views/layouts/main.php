<?php /* @var $this Controller */ ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            $(document).ready(function(){
                //var onloadHeight = $('#real_top').height();
                //alert(onloadHeight );
            });
        </script>
    </head>
    <body>
    <div class="navbar navbar-inverse" id="real_top">
        <div class="container">
            <div class="searchbody pull-right">
                <div class="for_form">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <input type="email" class="form-controll" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="pasword" class="form-controll" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Sign in</button>
                            (<a>lostPasswordLink</a>)
                        </div>
                    </form>
                </div>
                <!--input type="search" placeholder="Search">
                <span class="glyphicon glyphicon-search"></span-->
            </div>>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2 pull-left">
                <a class="logo_link" href="<?php echo Yii::app()->request->baseUrl; ?>">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logologo.jpg">
                </a>
            </div>
            <div class="cold-md-8 pull-right">
                <nav role="navigation" class="navbar navbar-default mainnav">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collection of nav links, forms, and other content for toggling -->
                    <div id="navbarCollapse" class="collapse navbar-collapse sometopnav">
                        <?php $this->widget('zii.widgets.CMenu',array(
                            'htmlOptions' => array('class'=>'nav navbar-nav'),
                            'items'=>array(
                                array('label'=>'Home', 'url'=>array('/site/index')),
                                array('label'=>'About', 'url'=>array('/site/page')),//, 'view'=>'about')),
                                array('label'=>'Contact', 'url'=>array('/site/contact')),
                                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                            ),
                        ));
                        ?>
                    </div>
                </nav>
            </div>
        </div>
        <div clas="content">
            <?php echo $content; ?>
        </div>
        <div class="posts">
            <div class="post-item row">

            </div>
        </div>
    </div>
    <div class="navbar navbar-inverse footcont">
        &copy Copyright 2014, All Rights Reseved
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    </body>
    </html>

<?php
/*
 <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
 *  */
?>