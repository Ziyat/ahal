<?php

namespace app\entities;

use Yii;
use yii\imagine\Image;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $title
 * @property integer $parent_id
 *
 * @property Category $parent
 * @property Category[] $categories
 * @property ProductAndCategory[] $productAndCategories
 */
class Category extends \yii\db\ActiveRecord
{

    public $thumb;
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
            [['title'], 'required'],
            [['parent_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['parent_id' => 'id']],
            [['thumb'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, png'],
        ];
    }

    public static function getImg($id, $type = null){
        if($type !== null) {
            $pathSrc = \Yii::$app->request->getHostInfo() . '/upload/images/' . $type . '/' . md5($id) .'.jpg';
            return $pathSrc;
        }
        $pathSrc = \Yii::$app->request->hostInfo.'/upload/images/news/no-image.jpg';
        return $pathSrc;

    }

    public function upload($id)
    {
        if ($this->validate()) {
            $filename = './upload/images/category/' . md5($id) .'.' . $this->thumb->extension;
            $this->thumb->saveAs($filename);
            $max_w = \Yii::$app->params['categoryImagesWidth'];
            $max_h = \Yii::$app->params['categoryImagesHeight'];
            Image::thumbnail($filename, $max_w, $max_h)
                ->save($filename, ['jpeg_quality' => 80]);
            return true;
        }
        return false;

    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'parent_id' => 'Parent ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductAndCategories()
    {
        return $this->hasMany(ProductAndCategory::className(), ['category_id' => 'id']);
    }
}
