<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $name
 * @property int $roll
 * @property string $email
 * @property int $batch
 * @property int $project_id
 *
 * @property Batch[] $batches
 * @property MidTerm[] $midTerms
 * @property Supervisor[] $supervisors
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'roll', 'email', 'batch'], 'required'],
            [['roll', 'batch', 'project_id'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'roll' => 'Roll',
            'email' => 'Email',
            'batch' => 'Batch',
            'project_id' => 'Project ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatches()
    {
        return $this->hasMany(Batch::className(), ['sid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMidTerms()
    {
        return $this->hasMany(MidTerm::className(), ['sid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupervisors()
    {
        return $this->hasMany(Supervisor::className(), ['s_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return StudentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentQuery(get_called_class());
    }
}
