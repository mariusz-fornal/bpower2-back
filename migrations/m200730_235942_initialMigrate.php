<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Class m200730_235942_initialMigrate
 */
class m200730_235942_initialMigrate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('status', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL'
        ]);

        $this->createTable('task', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING,
            'status' => Schema::TYPE_INTEGER,
            'owner' => Schema::TYPE_STRING,
        ]);

        $this->batchInsert('status', [
               'name'
            ], [
               ['Todo'],
               ['In progress'],
               ['Done']
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('status');
        $this->dropTable('task');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200730_235942_initialMigrate cannot be reverted.\n";

        return false;
    }
    */
}
