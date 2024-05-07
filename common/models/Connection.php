<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "connection".
 *
 * @property int|null $contactid
 * @property string|null $telegram
 * @property string|null $instagram
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $linkedin
 * @property string|null $tiktok
 * @property string|null $github
 * @property string|null $youtube
 * @property string|null $snapchat
 * @property string|null $whatsapp
 *
 * @property Contact $contact
 */
class Connection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'connection';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contactid'], 'integer'],
            [['telegram', 'instagram', 'facebook', 'twitter', 'linkedin', 'tiktok', 'github', 'youtube', 'snapchat', 'whatsapp'], 'string', 'max' => 32],
            [['contactid'], 'exist', 'skipOnError' => true, 'targetClass' => Contact::class, 'targetAttribute' => ['contactid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'contactid' => 'Contactid',
            'telegram' => 'Telegram',
            'instagram' => 'Instagram',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'linkedin' => 'Linkedin',
            'tiktok' => 'Tiktok',
            'github' => 'Github',
            'youtube' => 'Youtube',
            'snapchat' => 'Snapchat',
            'whatsapp' => 'Whatsapp',
        ];
    }

    /**
     * Gets query for [[Contact]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContact()
    {
        return $this->hasOne(Contact::class, ['id' => 'contactid']);
    }
}
