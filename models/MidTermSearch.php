<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MidTerm;

/**
 * MidTermSearch represents the model behind the search form of `app\models\MidTerm`.
 */
class MidTermSearch extends MidTerm
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pid', 'marks', 'remarks', 'accepted', 'uid'], 'integer'],
            [['document'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MidTerm::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'pid' => $this->pid,
            'marks' => $this->marks,
            'remarks' => $this->remarks,
            'accepted' => $this->accepted,
            'uid' => $this->uid,
        ]);

        $query->andFilterWhere(['like', 'document', $this->document]);

        return $dataProvider;
    }
}
