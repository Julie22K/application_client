<?php

namespace app\models;

use yii\db\ActiveRecord;

class Agents extends ActiveRecord
{
    public function ApplicationNumberByCategory($category, $dates = [])
    {
        $applications_number = 0;
        if (empty($dates)) {
            $applications_number = Applications::find()->where(['agent_id' => $this->id, 'category' => $category])
            ->count();
        } else {
            $applications_number = Applications::find()
                ->where(['between', 'date_of_decision', $dates[0],  $dates[1]])
                ->andWhere(['agent_id' => $this->id, 'category' => $category])
                ->count();
        }
        return $applications_number;
    }

    public function ApplicationsNumber($dates = [])
    {
        $applications_number =0;
        if (empty($dates)) {
            $applications_number = Applications::find()->where(['agent_id' => $this->id])->count();
        } else {
            $applications_number = Applications::find()
                ->where(['between', 'date_of_decision', $dates[0],  $dates[1]])
                ->andWhere(['agent_id' => $this->id])
                ->count();
        }
        return $applications_number;
    }
}
