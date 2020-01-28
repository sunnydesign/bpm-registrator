<?php

namespace Kubia\Provider\BpmRegistrator;

use Kubia\Interfaces\BpmRegistratorInterface;
use Quancy\Provider\Provider;
use Kubia\Logger\Logger;

class BpmRegistratorProvider extends Provider implements BpmRegistratorInterface
{
    public function processComplete($data, $headers)
    {
        Logger::elastic('bpm', 'complete', '', $data, $headers, [], $this->channels->responses, RMQ_LOG);

        return $data;
    }

    public function processTimeout($data, $headers)
    {
        Logger::elastic('bpm', 'killed by timeout', '', $data, $headers, [], $this->channels->responses, RMQ_LOG);

        return $data;
    }
}
