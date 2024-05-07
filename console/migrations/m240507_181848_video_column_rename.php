<?php

use yii\db\Migration;

/**
 * Class m240507_181848_video_column_rename
 */
class m240507_181848_video_column_rename extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `video`
        CHANGE COLUMN `addedtime` `addedtime` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240507_181848_video_column_rename cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240507_181848_video_column_rename cannot be reverted.\n";

        return false;
    }
    */
}
