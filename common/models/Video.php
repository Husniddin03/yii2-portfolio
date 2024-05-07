<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $about
 * @property string|null $what
 * @property string|null $addedtime
 * @property int|null $views
 * @property int|null $contactid
 *
 * @property Contact $contact
 */
class Video extends \yii\db\ActiveRecord
{
    public $videoFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about'], 'string'],
            [['addedtime'], 'safe'],
            [['views', 'contactid'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['what'], 'string', 'max' => 20],
            [['videoFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'mp4'],
            [['contactid'], 'exist', 'skipOnError' => true, 'targetClass' => Contact::class, 'targetAttribute' => ['contactid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'about' => 'About',
            'what' => 'What',
            'addedtime' => 'Addedtime',
            'views' => 'Views',
            'contactid' => 'Contactid',
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
    public function upload($fileName)
    {
        if ($this->validate()) { 
            $this->videoFile->saveAs('uploads/video/'.$fileName.'.'. $this->videoFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
