<?php
define('RMQ_HOST', getenv('RMQ_HOST'));
define('RMQ_PORT', getenv('RMQ_PORT'));
define('RMQ_VHOST', getenv('RMQ_VHOST'));
define('RMQ_USER', getenv('RMQ_USER'));
define('RMQ_PASS', getenv('RMQ_PASS'));
define('RMQ_QUEUE_IN', getenv('RMQ_QUEUE_IN'));
define('RMQ_QUEUE_OUT', getenv('RMQ_QUEUE_OUT'));
define('RMQ_LOG', getenv('RMQ_LOG'));
define('RMQ_RECONNECT_TIMEOUT', getenv('RMQ_RECONNECT_TIMEOUT'));
define('RMQ_TICK_TIMEOUT', getenv('RMQ_TICK_TIMEOUT'));
define('ELASTIC_INDEX', getenv('ELASTIC_INDEX'));
