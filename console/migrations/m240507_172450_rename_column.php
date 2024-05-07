<?php

use yii\db\Migration;

/**
 * Class m240507_172450_rename_column
 */
class m240507_172450_rename_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `image`
        CHANGE COLUMN `addedtime` `addedtime` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240507_172450_rename_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240507_172450_rename_column cannot be reverted.\n";

        return false;
    }
    */
}
