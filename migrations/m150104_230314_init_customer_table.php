<?php

use yii\db\Schema;
use yii\db\Migration;

class m150104_230314_init_customer_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'customers',
            [
                'id' => 'pk',
                'name' => 'string',
                'birth_date' => 'date',
                'notes' => 'text',
            ],
            'ENGINE=InnoDB'
        );
    }

    public function down()
    {
        $this->dropTable('customers');
    }
}
