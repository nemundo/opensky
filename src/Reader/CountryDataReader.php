<?php

namespace Nemundo\OpenSky\Reader;

use Nemundo\OpenSky\Data\Country\CountryReader;

class CountryDataReader extends CountryReader
{

    public function getData()
    {
        $this->addOrder($this->model->country);
        return parent::getData(); // TODO: Change the autogenerated stub
    }

}