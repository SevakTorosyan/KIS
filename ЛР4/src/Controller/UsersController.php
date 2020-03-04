<?php
/**
 * Created by PhpStorm.
 * User: sevak
 * Date: 2020-03-04
 * Time: 22:38
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends AbstractController
{
    public function GetUsers()
    {
        $users = $this->json([
            'users' => [
                [
                    "id"=> "111cf35x-2c4y-483z-a0a9-158621f77a21",
                    "planId"=> "999cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name"=> "Ivanov Ivan Ivanovich",
                    "birthDate"=> "01.01.2000",
                    "createdTime"=> "2020-03-04T17:49:05Z",
                    "updatedTime"=> "2020-03-04T17:49:05Z",
                    "subscribeTimeStart"=> "2020-03-04T17:49:05Z",
                    "subscribeTimeFinish"=> "2020-03-04T17:49:05Z",
                    "isSubcribeActual"=> 'true'
                ],
                [
                    "id"=> "222cf35x-2c4y-483z-a0a9-158621f77a21",
                    "planId"=> "888cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name"=> "Ivanov Ivan Ivanovich",
                    "birthDate"=> "01.01.2000",
                    "createdTime"=> "2020-03-04T17:49:05Z",
                    "updatedTime"=> "2020-03-04T17:49:05Z",
                    "subscribeTimeStart"=> "2020-03-04T17:49:05Z",
                    "subscribeTimeFinish"=> "2020-03-04T17:49:05Z",
                    "isSubcribeActual"=> 'false'
                ],
                [
                    "id"=> "333cf35x-2c4y-483z-a0a9-158621f77a21",
                    "planId"=> "777cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name"=> "Ivanov Ivan Ivanovich",
                    "birthDate"=> "01.01.2000",
                    "createdTime"=> "2020-03-04T17:49:05Z",
                    "updatedTime"=> "2020-03-04T17:49:05Z",
                    "subscribeTimeStart"=> "2020-03-04T17:49:05Z",
                    "subscribeTimeFinish"=> "2020-03-04T17:49:05Z",
                    "isSubcribeActual"=> 'false'
                ],
            ]
        ]);
        return $users;
    }

    public function GetUsero($id)
    {
        $user = $this->json([
            'user' => [
                [
                    "id"=> $id,
                    "planId"=> "999cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name"=> "Ivanov Ivan Ivanovich",
                    "birthDate"=> "01.01.2000",
                    "createdTime"=> "2020-03-04T17:49:05Z",
                    "updatedTime"=> "2020-03-04T17:49:05Z",
                    "subscribeTimeStart"=> "2020-03-04T17:49:05Z",
                    "subscribeTimeFinish"=> "2020-03-04T17:49:05Z",
                    "isSubcribeActual"=> 'true'
                ],
            ]
        ]);
        return $user;
    }

    public function PostUser(){
        return $this->json(['response'=>'User has been added successfully']);
    }

    public function PutUser($id){
        return $this->json(['response'=>'User with id '.$id.' has been changed successfully']);
    }

    public function DeleteUser($id){
        return $this->json(['response'=>'User with id '.$id.' has been deleted successfully']);
    }
}