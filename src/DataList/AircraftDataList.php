<?php

namespace Nemundo\OpenSky\DataList;

use Nemundo\Core\DataList\AbstractDataList;
use Nemundo\OpenSky\Data\Aircraft\Aircraft;
use Nemundo\OpenSky\Data\Aircraft\AircraftReader;

class AircraftDataList extends AbstractDataList
{

    protected function loadDataList()
    {

        $reader = new AircraftReader();
        foreach ($reader->getData() as $aircraftRow) {
            $this->addIdValue($aircraftRow->id,$aircraftRow->icao24);
        }



    }


    protected function onNew($value)
    {

        $data=new Aircraft();
        $data->icao24=$value;
        return $data->save();

    }


}