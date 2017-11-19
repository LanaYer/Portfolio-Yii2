<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>

</head>
<body>

<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
			['label' => 'Projects', 'url' => ['/site/projects']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>


	<div class="block-footer" id="six">	
		<div class="block-footer-map">				
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85446.91467692127!2d37.69148112209679!3d47.99021105039873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e0909500919a2d%3A0x36335efdc5856f84!2z0JTQvtC90LXRhtC6LCDQlNC-0L3QtdGG0LrQsNGPINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1483827741273" width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>	
		<div class = "container">
			<div class="col-md-6">

			</div>		
			<div class="col-md-6">
				<div class="ll-social-buttons">
					<ul>
						<li><a href="" title="Instagram"><i class="fa fa-instagram"> </i></a></li>
						<li><a href="" title="Вконтакте"><i class="fa fa-vk"> </i></a></li>
						<li><a href="" title="Одноклассники"> <i class="fa fa-odnoklassniki"></i></a></li>
						<li><a href="" title="Facebook"> <i class="fa fa-facebook"></i></a></li>
						<li><a href="" title="Twitter"><i class="fa fa-twitter"> </i></a></li>
					</ul>
				 </div>
			 </div>
			<div class="block-footer-copyright">
				<p>&copy; 2017</p>
			</div>				 
		</div>	
	</div>
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
