<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 05.01.2015
 * Time: 13:43
 */
?>
<?php
    use yii\helpers\Html;
    \yii\bootstrap\BootstrapAsset::register($this);
    \yii\web\YiiAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <title>CRM</title>
    </head>

    <body>
        <?= $content; ?>
    </body>
</html>