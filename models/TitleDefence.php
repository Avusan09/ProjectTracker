<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "title_defence".
 *
 * @property int $id
 * @property int $pid
 * @property int $uid
 * @property int $marks
 * @property string $remarks
 * @property int $accepted
 * @property string $document
 *
 * @property Project $p
 * @property User $u
 */
class TitleDefence extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'title_defence';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['pid', 'uid', 'marks', 'accepted'], 'integer'],
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

            'marks' => 'Marks',
            'remarks' => 'Remarks',
            'accepted' => 'Accepted',
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

    /**
     * @inheritdoc
     * @return TitleDefenceQuery the active query used by this AR class.
     */

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

    public static function find()
    {
        return new TitleDefenceQuery(get_called_class());
    }
}
