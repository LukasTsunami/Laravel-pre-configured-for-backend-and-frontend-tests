<?php

use Kahlan\Filter\Filters;
use Kahlan\Reporter\Coverage\Exporter\Coveralls;

$commandLine = $this->commandLine();
$commandLine->option('spec', 'default', 'tests/apis/spec');
