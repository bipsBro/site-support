<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">
	<?= $this->render('leftsidebar'); ?>
	<div class="main-panel">
		<?= $this->render('navbar'); ?>
		<div class="content">
			<?= $content ?>
			<?= $this->render('footer'); ?>
		</div>
	</div>
</div>
<?php $this->endBody() ?>
<!-- <script type="text/javascript">
    $(document).ready(function() {
		demo.initDashboardPageCharts();
    });
</script> -->
</body>
</html>
<?php $this->endPage() ?>
