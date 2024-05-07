<?php

use yii\db\Migration;

/**
 * Class m240507_044235_our_db_base
 */
class m240507_044235_our_db_base extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `image` (
            `id` int PRIMARY KEY AUTO_INCREMENT,
            `name` varchar(30),
            `about` text,
            `what` varchar(20),
            `addedtime` timestamp,
            `views` int,
            `contactid` int
          );
          
          CREATE TABLE `video` (
            `id` int PRIMARY KEY AUTO_INCREMENT,
            `name` varchar(30),
            `about` text,
            `what` varchar(20),
            `addedtime` timestamp,
            `views` int,
            `contactid` int
          );
          
          CREATE TABLE `contact` (
            `id` int PRIMARY KEY AUTO_INCREMENT,
            `firstname` varchar(20),
            `lastname` varchar(20),
            `job` varchar(255),
            `phone` varchar(20),
            `about` text,
            `location` text
          );
          
          CREATE TABLE `connection` (
            `contactid` int,
            `telegram` varchar(32),
            `instagram` varchar(32),
            `facebook` varchar(32),
            `twitter` varchar(32),
            `linkedin` varchar(32),
            `tiktok` varchar(32),
            `github` varchar(32),
            `youtube` varchar(32),
            `snapchat` varchar(32),
            `whatsapp` varchar(32)
          );
          
          CREATE TABLE `ourabout` (
            `id` int PRIMARY KEY AUTO_INCREMENT,
            `image` varchar(30),
            `about` text,
            `location` text DEFAULT 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1346.2903938567026!2d67.00625346317804!3d39.658746211440224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18d1b7cb6777%3A0xee8a5f918bec807b!2sToshkent%20Axborot%20Texnologiyalari%20Universiteti%20Samarqand%20Filiali%20Kompyuter%20injiniringi%20fakulteti!5e0!3m2!1suz!2s!4v1715056460035!5m2!1suz!2s'
          );
          
          ALTER TABLE `image` ADD FOREIGN KEY (`contactid`) REFERENCES `contact` (`id`);
          
          ALTER TABLE `video` ADD FOREIGN KEY (`contactid`) REFERENCES `contact` (`id`);
          
          ALTER TABLE `connection` ADD FOREIGN KEY (`contactid`) REFERENCES `contact` (`id`);";

        $this->execute($sql);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240507_044235_our_db_base cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240507_044235_our_db_base cannot be reverted.\n";

        return false;
    }
    */
}
