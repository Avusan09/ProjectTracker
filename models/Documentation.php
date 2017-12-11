<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documentation".
 *
 * @property int $id
 * @property int $uid
 * @property int $pid
 * @property string $remarks
 * @property int $marks
 * @property int $accepted
 * @property string $document
 *
 * @property Project $p
 * @property User $u
 */
class Documentation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'documentation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'pid', 'document'], 'required'],
            [['uid', 'pid', 'marks', 'accepted'], 'integer'],
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
            'remarks' => 'Remarks',
            'marks' => 'Marks',
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
     * @return DocumentationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DocumentationQuery(get_called_class());
    }
}
