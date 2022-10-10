<?php

namespace Nemundo\OpenSky\Import;

use Nemundo\Core\Base\AbstractImport;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Http\Response\StatusCode;
use Nemundo\Core\Json\Reader\JsonReader;
use Nemundo\Core\Type\DateTime\DateTime;
use Nemundo\Core\Type\Geo\GeoCoordinateAltitude;
use Nemundo\Core\WebRequest\CurlWebRequest;
use Nemundo\OpenSky\Data\Aircraft\Aircraft;
use Nemundo\OpenSky\Data\Country\Country;
use Nemundo\OpenSky\Data\Tracking\Tracking;
use Nemundo\OpenSky\DataList\AircraftDataList;

class TrackingImport extends AbstractImport
{

    public function importData()
    {


        $aircraft = new AircraftDataList();


        $url = 'https://opensky-network.org/api/states/all?lamin=45.8389&lomin=5.9962&lamax=47.8229&lomax=10.5226';

        $webRequest = new CurlWebRequest();
        $webRequest->authentication->authenticate = true;
        $webRequest->authentication->username = 'urslang';
        $webRequest->authentication->password = 'Engelberg123';
        $response = $webRequest->getUrl($url);

        if ($response->statusCode === StatusCode::OK) {

            $jsonReader = new JsonReader();
            $jsonReader->fromText($response->html);

            $jsonData = $jsonReader->getData();

            $dateTime = new DateTime();
            $dateTime->fromTimestamp($jsonData['time']);

            //(new Debug())->write($dateTime->getShortDateTimeLeadingZeroFormat());
            //exit;


            foreach ($jsonData['states'] as $state) {

                //(new Debug())->write($state);


                $icao24 = $state[0];
                $callsign = $state[1];
                $country = $state[2];

                $geoCoordinate = new GeoCoordinateAltitude();
                $geoCoordinate->latitude = $state[6];
                $geoCoordinate->longitude = $state[5];
                $geoCoordinate->altitude = $state[13];


                $data = new Tracking();
                $data->aircraftId = $aircraft->getId($icao24);
                $data->position = $geoCoordinate;
                $data->save();


                $data = new Aircraft();
                $data->updateOnDuplicate = true;
                $data->icao24 = $icao24;
                $data->callsign = $callsign;
                $data->save();

                $data = new Country();
                $data->ignoreIfExists = true;
                $data->country = $country;
                $data->save();


                // Aircraft
                // Tracking
                // Tracking


            }


        } else {

            (new Debug())->write($response);

        }


        //(new Debug())->write($response);

        //exit;


        /*$builder= new UrlBuilder('https://opensky-network.org/api/states/all');
        $builder->addRequestValue('','');
        $builder->addRequestValue('','');
        $builder->addRequestValue('','');
        $builder->addRequestValue('','');*/


       /* $reader = new JsonReader();
        $reader->fromUrl($url);
        foreach ($reader->getData() as $jsonRow) {


        }*/


        // TODO: Implement importData() method.
    }


}