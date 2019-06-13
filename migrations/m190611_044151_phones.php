<?php

use yii\db\Migration;

/**
 * Class m190611_044151_phones
 */
class m190611_044151_phones extends Migration
{


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('phones', [
            'id' => $this->primaryKey(),
            'phone' => $this->integer(),
        ]);
        $this->insert('phones', ['phone'=>'9999999999']);
        $this->insert('phones', ['phone'=>'1232340000']);
        $this->insert('phones', ['phone'=>'9133349809']);
        $this->insert('phones', ['phone'=>'9522342345']);
    }

    public function down()
    {
        $this->dropTable('phones');     
    }
    
}
