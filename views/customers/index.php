<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 05.01.2015
 * Time: 13:21
 * @var ArrayDataProvider $records
 */

use yii\data\ArrayDataProvider;
use yii\widgets\ListView;
?>

<?php
echo ListView::widget(
    [
        'options' => [
            'class' => 'list-view',
            'id' => 'search_results'
        ],
        'itemView' => '_customer',
        'dataProvider' => $records
    ]
);