<?php
namespace app\models;

use Yii;

/**
 * This is the model class for table "projectimg".
 *
 * @property integer $id
 * @property integer $project_id
 * @property string $image
 *
 * @property Projects $project
 */
class Projectimg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projectimg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'image'], 'required'],
            [['project_id'], 'integer'],
            [['image'], 'string'],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Projects::className(), ['id' => 'project_id']);
    }
}
