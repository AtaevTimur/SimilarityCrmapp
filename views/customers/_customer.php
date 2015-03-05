<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 05.01.2015
 * Time: 17:06
 */
use yii\widgets\DetailView;

?>
<?php
echo DetailView::widget(
    [
        'model' => $model,
        'attributes' => [
            ['attribute' => 'name'],
            ['attribute' => 'birth_date', 'value' => $model->birth_date->format('Y-m-d')],
            'notes:text',
            ['label' => 'Phone Number', 'attribute' => 'phones.0.number']
        ]
    ]);