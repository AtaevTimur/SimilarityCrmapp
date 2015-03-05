<?php

use yii\db\Schema;
use yii\db\Migration;

class m150305_170624_add_auth_key_to_user extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'auth_key', 'string UNIQUE');
    }

    public function down()
    {
        echo "m150305_170624_add_auth_key_to_user cannot be reverted.\n";

        return false;
    }
}
