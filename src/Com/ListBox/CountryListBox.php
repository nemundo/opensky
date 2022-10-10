<?php

namespace Nemundo\OpenSky\Com\ListBox;

use Nemundo\Admin\Com\ListBox\AdminListBox;
use Nemundo\OpenSky\Reader\CountryDataReader;

class CountryListBox extends AdminListBox
{
    public function getContent()
    {
        $this->label = 'Country';

        $reader=new CountryDataReader();
        foreach ($reader->getData() as $countryRow) {
            $this->addItem($countryRow->id,$countryRow->country);
        }

        return parent::getContent();
    }
}