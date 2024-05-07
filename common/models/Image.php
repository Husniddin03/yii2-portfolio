<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "image".
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
class Image extends \yii\db\ActiveRecord
{
    public $imageFiles;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
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
            [['contactid'], 'exist', 'skipOnError' => true, 'targetClass' => Contact::class, 'targetAttribute' => ['contactid' => 'id']],
            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 4],
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
            $count = 1;
            foreach ($this->imageFiles as $file) {
                $file->saveAs('uploads/image/' .$count.'_'.$fileName . '.' . $file->extension);
                $count++;
            }
            return true;
        } else {
            return false;
        }
    }
}
