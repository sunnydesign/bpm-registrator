<?php

namespace Kubia\Interfaces;

use Quancy\Interfaces\CommonInterface;

interface BpmRegistratorInterface extends CommonInterface
{
    public function processComplete($data, $headers);

    public function processTimeout($data, $headers);
}
