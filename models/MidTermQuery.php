<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[MidTerm]].
 *
 * @see MidTerm
 */
class MidTermQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return MidTerm[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MidTerm|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
