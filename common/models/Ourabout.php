<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ourabout".
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $about
 * @property string|null $location
 */
class Ourabout extends \yii\db\ActiveRecord
{
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'about' => 'About',
            'location' => 'Location',
        ];
    }
}
