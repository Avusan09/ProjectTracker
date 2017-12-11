<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "final".
 *
 * @property int $id
 * @property int $uid
 * @property int $pid
 * @property int $marks
 * @property string $remarks
 * @property int $accepted
 * @property int $demo
 * @property string $document
 *
 * @property Project $p
 * @property User $u
 */
class FinalTerm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'final';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document'], 'required'],
            [['uid', 'pid', 'marks', 'accepted', 'demo'], 'integer'],
            [['remarks', 'document'], 'string'],
            [['pid'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['pid' => 'id']],
            [['uid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['uid' => 'id']],
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
            'pid' => 'Pid',
            'marks' => 'Marks',
            'remarks' => 'Remarks',
            'accepted' => 'Accepted',
            'demo' => 'Demo',
            'document' => 'Document',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getP()
    {
        return $this->hasOne(Project::className(), ['id' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getU()
    {
        return $this->hasOne(User::className(), ['id' => 'uid']);
    }

    public function beforeSave($insert)
    {
        $projects = \app\models\Project::find()->all();
        $userid = Yii::$app->getUser()->id;
        foreach ($projects as $index=>$project)
        {
            if($project->uid === $userid)
            {
                $piid = $project->id;

            }
        }

        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {

                $this->uid = Yii::$app->getUser()->id;
                $this->pid = $piid;

            }

            return true;
        }
        return false;
    }

    /**
     * @inheritdoc
     * @return FinalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FinalQuery(get_called_class());
    }
}
