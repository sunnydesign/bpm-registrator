# BPM Process Instance Final Logger

Logging finalized process instance in Camunda

## Docker images
| Docker image | Version tag | Date of build |
| --- | --- | --- |
| docker.quancy.com.sg/bpm-registrator | latest | 2020-01-23 |

## Queues
- Incoming queue: `bpm_log`
- Outgoing queue: `bpm_events`

## Requirements
- php7.2-cli
- php7.2-bcmath
- php-mbstring
- php-amqp
- composer

## Configuration constants
- RMQ_HOST=10.8.0.58
- RMQ_PORT=5672
- RMQ_VHOST=quancy.com.sg
- RMQ_USER=`<secret>`
- RMQ_PASS=`<secret>`
- RMQ_QUEUE_IN=bpm_log
- RMQ_QUEUE_OUT=bpm_out
- RMQ_LOG=bpm_events
- RMQ_RECONNECT_TIMEOUT=10000
- RMQ_TICK_TIMEOUT=10000
- ELASTIC_INDEX=bpm

## Installation
```
git clone https://gitlab.com/quancy-core/bpm-registrator.git
```

## Build and run as docker container
```
docker-compose build
docker-compose up
```

## Build and run as docker container daemon
```
docker-compose build
docker-compose up -d
```

## Stop docker container daemon
```
docker-compose down
```