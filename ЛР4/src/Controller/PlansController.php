<?php
/**
 * Created by PhpStorm.
 * User: sevak
 * Date: 2020-03-04
 * Time: 23:11
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PlansController extends AbstractController
{
    public function GetPlans()
    {
        $plans = $this->json([
            'plans' => [
                [
                    "id"=> "999cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name"=> "Лимит",
                    "description"=> "Лимит",
                    "subscriptionDayCount"=> 30,
                    "price"=> 300,
                    "isActive"=> true
                ],
                [
                    "id"=> "888cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name"=> "Почти",
                    "description"=> "Почти безлимит",
                    "subscriptionDayCount"=> 180,
                    "price"=> 3000,
                    "isActive"=> true
                ],
                [
                    "id"=> "777cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name"=> "Безлимит",
                    "description"=> "Безлимит",
                    "subscriptionDayCount"=> 540,
                    "price"=> 5000,
                    "isActive"=> false
                ],
            ]
        ]);
        return $plans;
    }

    public function GetPlan($id)
    {
        $plan = $this->json([
            'plan' => [
                [
                    "id"=> $id,
                    "name"=> "Лимит",
                    "description"=> "Лимит",
                    "subscriptionDayCount"=> 30,
                    "price"=> 300,
                    "isActive"=> true
                ],
            ]
        ]);
        return $plan;
    }

    public function PostPlan(){
        return $this->json(['response'=>'Plan has been added successfully']);
    }

    public function PatchPlan($id){
        return $this->json(['response'=>'Plan with id '.$id.' has been changed successfully']);
    }

    public function DeletePlan($id){
        return $this->json(['response'=>'Plan with id '.$id.' has been deleted successfully']);
    }
}