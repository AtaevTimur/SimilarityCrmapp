<?php

use yii\db\Schema;
use yii\db\Migration;

class m150304_183536_init_user_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'user',
            [
                'id' => 'pk',
                'username' => 'string UNIQUE',
                'password' => 'string'
            ]
        );
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
