<?php

namespace app\entities;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property string $price
 * @property string $pictures
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property ProductAndCategory[] $productAndCategories
 */
class Product extends \yii\db\ActiveRecord
{
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
            [['title', 'desc'], 'required'],
            [['status'], 'integer'],
            [['title', 'desc', 'price', 'pictures', 'created_at', 'updated_at'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'desc' => 'Desc',
            'price' => 'Price',
            'pictures' => 'Pictures',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductAndCategories()
    {
        return $this->hasMany(ProductAndCategory::className(), ['product_id' => 'id']);
    }
}
