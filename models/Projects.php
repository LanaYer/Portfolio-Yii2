<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $project_name
 * @property string $short_description
 * @property string $full_description
 * @property string $link
 * @property integer $category
 *
 * @property Projectimg[] $projectimgs
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name', 'short_description', 'full_description', 'category'], 'required'],
            [['project_name', 'short_description', 'full_description', 'link'], 'string'],
            [['category'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => 'Project Name',
            'short_description' => 'Short Description',
            'full_description' => 'Full Description',
            'link' => 'Link',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectimgs()
    {
        return $this->hasMany(Projectimg::className(), ['project_id' => 'id']);
    }
}
