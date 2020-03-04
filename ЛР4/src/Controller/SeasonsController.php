<?php
/**
 * Created by PhpStorm.
 * User: sevak
 * Date: 2020-03-04
 * Time: 21:57
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SeasonsController extends AbstractController
{
    public function GetSeasons($serialID)
    {
        $seasons = $this->json([
            'seasons' => [
                [
                    'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21',
                    'serialID' => $serialID,
                    'name' => 'Breaking Bad Season 1',
                    'description' => 'Season 1',
                    'logo' => 'S1BB.jpeg',
                    'seasonNumber' => 1,
                ],
                [
                    'id' => '136cf35x-2c4y-483z-a0a9-158621f77a21',
                    'serialID' =>$serialID,
                    'name' => 'Breaking Bad Season 2',
                    'description' => 'Season 2',
                    'logo' => 'S2BB.jpeg',
                    'seasonNumber' => 2,
                ],
                [
                    'id' => '146cf35x-2c4y-483z-a0a9-158621f77a21',
                    'serialID' =>$serialID,
                    'name' => 'Breaking Bad Season 3',
                    'description' => 'Season 3',
                    'logo' => 'S3BB.jpeg',
                    'seasonNumber' => 3,
                ],
            ]
        ]);
        return $seasons;
    }

    public function GetSeason($id)
    {
        $serial = $this->json([
            'season' => [
                [
                    'id' => $id,
                    'serialID' => '6f6cf35x-2c4y-483z-a0a9-158621f77a21',
                    'name' => 'Breaking Bad Season 1',
                    'description' => 'Season 1',
                    'logo' => 'S1BB.jpeg',
                    'seasonNumber' => 1,
                ],
            ]
        ]);
        return $serial;
    }

    public function PostSeason()
    {
        return $this->json(['response' => 'Season has been added successfully']);
    }

    public function PutSeason($id)
    {
        return $this->json(['response' => 'Season with id ' . $id . ' has been changed successfully']);
    }

    public function DeleteSeason($id)
    {
        return $this->json(['response' => 'Season with id ' . $id . ' has been deleted successfully']);
    }
}
