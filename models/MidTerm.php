<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mid_term".
 *
 * @property int $id
 * @property int $pid
 * @property int $marks
 * @property int $remarks
 * @property int $accepted
 * @property int $uid
 * @property string $document
 *
 * @property Project $p
 * @property User $u
 */
class MidTerm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mid_term';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document'], 'required'],
            [['pid', 'marks',  'accepted', 'uid'], 'integer'],
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
            'uid' => 'Uid',
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
     * @return MidTermQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MidTermQuery(get_called_class());
    }
}
