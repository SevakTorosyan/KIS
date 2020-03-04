<?php
/**
 * Created by PhpStorm.
 * User: sevak
 * Date: 2020-03-04
 * Time: 22:19
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SeriesController extends AbstractController
{
    public function GetSeriesBySeasonId($seasonID)
    {
        $series = $this->json([
            'series' => [
                [
                    'id' => '546cf35x-2c4y-483z-a0a9-158621f77a21',
                    'seasonID' => $seasonID,
                    'name' => 'Series 2',
                    'description' => 'Season 1',
                    'logo' => 'S1BB.jpeg',
                    'seriesNumber' => 1,
                ],
                [
                    'id' => '547cf35x-2c4y-483z-a0a9-158621f77a21',
                    'seasonID' =>$seasonID,
                    'name' => 'Series 2',
                    'description' => 'Season 2',
                    'logo' => 'S2BB.jpeg',
                    'seriesNumber' => 2,
                ],
                [
                    'id' => '548cf35x-2c4y-483z-a0a9-158621f77a21',
                    'seasonID' =>$seasonID,
                    'name' => 'Series 3',
                    'description' => 'Series 3',
                    'logo' => 'S3BB.jpeg',
                    'seriesNumber' => 3,
                ],
            ]
        ]);
        return $series;
    }

    public function GetSeries($id)
    {
        $series = $this->json([
            'series' => [
                [
                    'id' => $id,
                    'seasonID' => '126cf35x-2c4y-483z-a0a9-158621f77a21',
                    'name' => 'Series 2',
                    'description' => 'Season 1',
                    'logo' => 'S1BB.jpeg',
                    'seriesNumber' => 1,
                ],
            ]
        ]);
        return $series;
    }

    public function PostSeries()
    {
        return $this->json(['response' => 'Series has been added successfully']);
    }

    public function PutSeries($id)
    {
        return $this->json(['response' => 'Series with id ' . $id . ' has been changed successfully']);
    }

    public function DeleteSeries($id)
    {
        return $this->json(['response' => 'Series with id ' . $id . ' has been deleted successfully']);
    }
}