<?php

use yii\db\Migration;

/**
 * Class m240507_183018_about_add_column
 */
class m240507_183018_about_add_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `ourabout`
        ADD COLUMN `title` varchar(100);
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240507_183018_about_add_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240507_183018_about_add_column cannot be reverted.\n";

        return false;
    }
    */
}
