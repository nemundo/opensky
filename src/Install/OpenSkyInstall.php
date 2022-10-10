<?php

namespace Nemundo\OpenSky\Install;

use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\App\Scheduler\Setup\SchedulerSetup;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\OpenSky\Application\OpenSkyApplication;
use Nemundo\OpenSky\Data\OpenSkyModelCollection;
use Nemundo\OpenSky\Scheduler\LiveTrackingImportScheduler;

class OpenSkyInstall extends AbstractInstall
{
    public function install()
    {

        (new ModelCollectionSetup())
            ->addCollection(new OpenSkyModelCollection());

        (new SchedulerSetup(new OpenSkyApplication()))
            ->addScheduler(new LiveTrackingImportScheduler());

    }
}