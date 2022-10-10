<?php

namespace Nemundo\OpenSky\Scheduler;

use Nemundo\App\Scheduler\Job\AbstractScheduler;
use Nemundo\OpenSky\Import\TrackingImport;

class LiveTrackingImportScheduler extends AbstractScheduler
{
    protected function loadScheduler()
    {

        $this->consoleScript=true;
        $this->scriptName='opensky-live-tracking';


    }

    public function run()
    {

        (new TrackingImport())->importData();

    }
}