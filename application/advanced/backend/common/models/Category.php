<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $category_id
 * @property string $category_name
 * @property string $subcategory_name
 * @property string $issue_type
 *
 * @property SccCase[] $sccCases
 */
class Category extends \yii\db\ActiveRecord
{
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
            [['category_name', 'subcategory_name', 'issue_type'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
            'subcategory_name' => 'Subcategory Name',
            'issue_type' => 'Issue Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSccCases()
    {
        return $this->hasMany(SccCase::className(), ['category_id' => 'category_id']);
    }
}
