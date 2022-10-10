<?php

namespace Nemundo\OpenSky\Page;

use Nemundo\Admin\Com\Button\AdminIconSiteButton;
use Nemundo\Admin\Com\Form\AdminSearchForm;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\OpenSky\Com\ListBox\CountryListBox;
use Nemundo\OpenSky\Data\Aircraft\AircraftReader;
use Nemundo\OpenSky\Site\TrackingKmlSite;

class OpenSkyPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout =new AdminFlexboxLayout($this);

        $search = new AdminSearchForm($layout);

        $country=new CountryListBox($search);

        $icon=new AdminIconSiteButton($this);
        $icon->site=TrackingKmlSite::$site;


        $table = new AdminTable($this);

        $reader=new AircraftReader();
        foreach ($reader->getData() as $aircraftRow) {


            $row=new AdminTableRow($table);
            $row->addText($aircraftRow->callsign);
            //$row->addText($aircraftRow->poscallsign);


        }








        return parent::getContent();
    }
}