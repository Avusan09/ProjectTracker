<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Documentation]].
 *
 * @see Documentation
 */
class DocumentationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Documentation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Documentation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
