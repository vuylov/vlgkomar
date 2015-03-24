<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property string $detail
 * @property string $thumb
 * @property string $keywords
 * @property string $description
 *
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['detail', 'thumb', 'keywords', 'description', 'preview'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['file'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'detail' => 'Подробно',
            'thumb' => 'Изображение',
            'keywords' => 'SEO ключевые слова',
            'description' => 'SEO описание',
            'preview'       => 'Анонс'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    public function beforeDelete()
    {
        if(parent::beforeDelete()){
            $this->deleteThumbFile();
            return true;
        }
        return false;
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
}
