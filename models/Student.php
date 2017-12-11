<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property int $uid
 * @property string $name
 * @property string $semail
 * @property int $batch
 * @property int $roll
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
            [['name', 'semail', 'batch', 'roll'], 'required'],
            [['uid', 'batch', 'roll'], 'integer'],
            [['name', 'semail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'name' => 'Name',
            'semail' => 'Semail',
            'batch' => 'Batch',
            'roll' => 'Roll',
        ];
    }

    public function beforeSave($insert)
    {

        $email = \dektrium\user\models\User::find()->all();
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->name = Yii::$app->getUser()->identity;
                $this->uid = Yii::$app->getUser()->id;
                $this->semail = Yii::$app->getUser()->email;
            }

            return true;
        }
        return false;
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
