<?php

use yii\db\Migration;

/**
 * Class m250111_130428_agents
 */
class m250111_130428_agents extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('agents', [
            'id' => $this->primaryKey(),
            'full_name'=>$this->string()->notNull(),
            'phone'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250111_130428_agents cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250111_130428_agents cannot be reverted.\n";

        return false;
    }
    */
}
