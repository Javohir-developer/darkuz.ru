<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $about_uz
 * @property string $about_en
 * @property string $about_ru
 * @property string $image
 * @property int $status
 * @property string $create_date
 */
class Blog extends \yii\db\ActiveRecord
{

    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'about_uz', 'title_en', 'about_en', 'title_ru', 'about_ru', 'status'], 'required'],
            [['about_uz', 'about_en', 'about_ru'], 'string'],
            [['status'], 'integer'],
            [['create_date'], 'safe'],
            [['title_uz', 'title_en', 'title_ru'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 200],
            ['file', 'file', 'extensions' => ['jpg', 'png','doc','docx', 'pdf']],
//            [['file'], 'file', 'extensions' => 'jpg', 'png','doc','docx', 'pdf']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => 'Title Uz',
            'title_en' => 'Title En',
            'title_ru' => 'Title Ru',
            'about_uz' => 'About Uz',
            'about_en' => 'About En',
            'about_ru' => 'About Ru',
            'image' => 'Image',
            'status' => 'Status',
            'create_date' => 'Create Date',
        ];
    }
}
