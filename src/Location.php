<?php

namespace Iprogrammer;

class Location
{
    static function run($lat1, $lon1, $lat2, $lon2, $unit = 'km')
    {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;

        switch ($unit) {
            case 'km':
                return round($miles * 1.609344, 2);
            case 'nmi':
                return round($miles * 0.8684, 2);
            default:
                return round($miles, 2);
        }
    }
}