<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property string $detail
 * @property string $thumb
 * @property string $radius
 * @property string $price
 * @property integer $order
 * @property string $keywords
 * @property string $description
 *
 * @property File[] $files
 * @property Category $category
 */
class Product extends \yii\db\ActiveRecord
{
    public $thumbnail;
    public $files;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name'], 'required'],
            [['category_id', 'order'], 'integer'],
            [['detail', 'thumb', 'keywords', 'description', 'preview'], 'string'],
            [['name', 'radius', 'price'], 'string', 'max' => 255],
            [['thumb', 'files'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'name' => 'Наименование',
            'detail' => 'Описание',
            'preview'   => 'Краткое описание',
            'thumb' => 'Изображение продукта',
            'radius' => 'Радиус действия',
            'price' => 'Цена',
            'order' => 'Порядок',
            'keywords' => 'Ключевые слова',
            'description' => 'SEO - описание',
            'thumbnail'     => 'Изображение продукта',
            'files'         => 'Файлы для загрузки'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFiles()
    {
        return $this->hasMany(File::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function deleteThumbFile()
    {
        if($this->thumb){
            $fp = Yii::getAlias('@webroot').'/'.$this->thumb;
            if(file_exists($fp)){
                unlink($fp);
            }
        }
    }

    public function deleteFiles()
    {
        $files = $this->getFiles()->all();
        if($files){
            foreach($files as $file){
                $file->delete();
            }
        }
    }

    public function beforeDelete()
    {
        if(parent::beforeDelete()){
            $this->deleteThumbFile();
            $this->deleteFiles();

            return true;
        }
        return false;
    }
}
