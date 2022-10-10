<?php

namespace Nemundo\OpenSky\Application;

use Nemundo\App\Application\Type\AbstractApplication;
use Nemundo\OpenSky\Data\OpenSkyModelCollection;
use Nemundo\OpenSky\Install\OpenSkyInstall;
use Nemundo\OpenSky\Install\OpenSkyUninstall;
use Nemundo\OpenSky\Site\OpenSkySite;

class OpenSkyApplication extends AbstractApplication
{
    protected function loadApplication()
    {

        $this->application = 'OpenSky';
        $this->applicationId = '7427e3fd-c815-46ed-9b3b-be6df2227f9e';
        $this->modelCollectionClass = OpenSkyModelCollection::class;
        $this->installClass = OpenSkyInstall::class;
        $this->uninstallClass = OpenSkyUninstall::class;
        $this->appSiteClass = OpenSkySite::class;

    }
}