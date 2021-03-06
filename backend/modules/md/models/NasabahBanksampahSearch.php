<?php

namespace backend\modules\md\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\md\models\NasabahBanksampah;

/**
 * NasabahBanksampahSearch represents the model behind the search form of `backend\modules\md\models\NasabahBanksampah`.
 */
class NasabahBanksampahSearch extends NasabahBanksampah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nasabah_id', 'banksampah_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = NasabahBanksampah::find();

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
            'nasabah_id' => $this->nasabah_id,
            'banksampah_id' => $this->banksampah_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        return $dataProvider;
    }
}
