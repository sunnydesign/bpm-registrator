<?php

namespace Kubia\Interfaces;

use Quancy\Interfaces\CommonInterface;

interface BpmFinalLoggerInterface extends CommonInterface
{
    public function processComplete($data, $headers);
}
