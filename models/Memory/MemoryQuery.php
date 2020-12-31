<?php

namespace app\models\Memory;

/**
 * This is the ActiveQuery class for [[Memory]].
 *
 * @see Memory
 */
class MemoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Memory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Memory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
