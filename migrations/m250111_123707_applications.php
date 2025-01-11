<?php

use yii\db\Migration;

/**
 * Class m250111_123707_applications
 */
class m250111_123707_applications extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('applications', [
            'id' => $this->primaryKey(),
            'description'=>$this->text(),
            'date_of_decision'=>$this->date(),
            'date_of_creation'=>$this->date(),
            'agent_id'=>$this->integer()
        ]);
        $this->addColumn('applications', 'status', " ENUM('Нова','В роботі', 'Вирішена')");
        $this->addColumn('applications', 'category'," ENUM('Відключення', 'Перевірка/здешевлення', 'Технічне питання', 'Інше')");
            
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250111_123707_applications cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250111_123707_applications cannot be reverted.\n";

        return false;
    }
    */
}
