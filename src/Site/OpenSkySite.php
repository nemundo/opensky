<?php

namespace Nemundo\OpenSky\Site;

use Nemundo\OpenSky\Page\OpenSkyPage;
use Nemundo\Web\Site\AbstractSite;

class OpenSkySite extends AbstractSite
{
    protected function loadSite()
    {

        $this->title = 'OpenSky';
        $this->url = 'opensky';

        new TrackingKmlSite($this);

    }

    public function loadContent()
    {

        (new OpenSkyPage())->render();

    }
}