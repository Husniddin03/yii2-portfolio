<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ourabout".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $image
 * @property string|null $about
 * @property string|null $location
 */
class Ourabout extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ourabout';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about', 'location'], 'string'],
            [['image'], 'string', 'max' => 30],
            [['title'], 'string', 'max' => 100],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, gif, png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'about' => 'About',
            'location' => 'Location',
        ];
    }
    public function upload($fileName)
    {
        if ($this->validate()) { 
            $this->imageFile->saveAs('uploads/image/'.$fileName.'.'. $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
