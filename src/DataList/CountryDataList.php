<?php

namespace Nemundo\OpenSky\DataList;

use Nemundo\Core\DataList\AbstractDataList;
use Nemundo\OpenSky\Data\Country\Country;
use Nemundo\OpenSky\Reader\CountryDataReader;

class CountryDataList extends AbstractDataList
{

    protected function loadDataList()
    {

        $reader = new CountryDataReader();
        foreach ($reader->getData() as $countryRow) {
            $this->addIdValue($countryRow->id, $countryRow->country);
        }

    }


    protected function onNew($value)
    {

        $data = new Country();
        $data->country = $value;
        $dataId = $data->save();

        return $dataId;

    }


}