<?php
namespace app\services;

use app\models\Agents;
use app\models\Applications;

class AgentService
{
    
   public static function ApplicationNumberByCategory($category,$agent_id, $dates = [])
   {
       $applications_number = 0;
       if (is_null($dates[0])&&is_null($dates[1])) {
           $applications_number = Applications::find()->where(['agent_id' => $agent_id, 'category' => $category])
           ->count();
       } else {
           $applications_number = Applications::find()
               ->where(['between', 'date_of_decision', $dates[0],  $dates[1]])
               ->andWhere(['agent_id' => $agent_id, 'category' => $category])
               ->count();
       }
       return $applications_number;
   }

   public static function ApplicationsNumber($agent_id,$dates = [])
   {
       $applications_number =0;
       if (is_null($dates[0])&&is_null($dates[1])) {
           $applications_number = Applications::find()->where(['agent_id' => $agent_id])->count();
       } else {
           $applications_number = Applications::find()
               ->where(['between', 'date_of_decision', $dates[0],  $dates[1]])
               ->andWhere(['agent_id' => $agent_id])
               ->count();
       }
       return $applications_number;
   }
   
}