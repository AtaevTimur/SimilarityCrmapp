<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 06.03.2015
 * Time: 23:14
 */
?>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$form = ActiveForm::begin(['id' => 'login-form']);
echo $form->field($model, 'username');
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'rememberMe')->checkbox();
echo Html::submitButton(
    'Login',
    ['class' => 'btn btn-primary', 'name' => 'login-button']
);
ActiveForm::end();
?>