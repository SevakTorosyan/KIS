<?php
/**
 * Created by PhpStorm.
 * User: sevak
 * Date: 2020-03-04
 * Time: 20:46
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SerialsController extends AbstractController
{
    public function GetSerials()
    {
        $serials = $this->json([
              'serials' => [
                  [
                      'id' => '4f6cf35x-2c4y-483z-a0a9-158621f77a21',
                      'name'=> 'Breaking Bad',
                      'description' => 'Serial about teacher with cancer',
                      'logo' => 'BB.jpeg',
                      'seasonNumber' => 6,
                      'genre' => 'Crime drama'
                  ],
                  [
                      'id' => '5f6cf35x-2c4y-483z-a0a9-158621f77a21',
                      'name'=> 'Peaky Blinders',
                      'description' => 'Serial about criminals in London 1920',
                      'logo' => 'PB.jpeg',
                      'seasonNumber' => 5,
                      'genre' => 'Crime drama'
                  ],
                  [
                      'id' => '6f6cf35x-2c4y-483z-a0a9-158621f77a21',
                      'name'=> 'Sherlock',
                      'description' => 'Detective team Sherlock and Dr. Watson try to reveal criminals',
                      'logo' => 'SH.jpeg',
                      'seasonNumber' => 3,
                      'genre' => 'Detective'
                  ],
              ]
        ]);
        return $serials;
    }

    public function GetSerial($id = "6f6cf35x-2c4y-483z-a0a9-158621f77a21")
    {
        $serial = $this->json([
            'serial' => [
                [
                    'id' => $id,
                    'name'=> 'Breaking Bad',
                    'description' => 'Serial about teacher with cancer',
                    'logo' => 'BB.jpeg',
                    'seasonNumber' => 6,
                    'genre' => 'Crime drama'
                ],
            ]
        ]);
        return $serial;
    }

    public function PostSerial(){
        return $this->json(['response'=>'Serial has been added successfully']);
    }

    public function PutSerial($id){
        return $this->json(['response'=>'Serial with id '.$id.' has been changed successfully']);
    }

    public function DeleteSerial($id){
        return $this->json(['response'=>'Serial with id '.$id.' has been deleted successfully']);
    }
}