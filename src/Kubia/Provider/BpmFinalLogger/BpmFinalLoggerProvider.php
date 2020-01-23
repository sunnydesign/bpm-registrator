<?php

namespace Kubia\Provider\BpmFinalLogger;

use Kubia\Interfaces\BpmFinalLoggerInterface;
use Quancy\Provider\Provider;
use Kubia\Logger\Logger;

class BpmFinalLoggerProvider extends Provider implements BpmFinalLoggerInterface
{
    public function processComplete($data, $headers)
    {
        Logger::elastic('bpm', 'complete', '', $data, $headers, [], $this->channels->responses, RMQ_LOG);

        return $data;
    }
}
