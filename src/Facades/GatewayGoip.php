<?php

namespace Nekkoy\GatewayGoip\Facades;

use Illuminate\Support\Facades\Facade;
use Nekkoy\GatewayAbstract\DTO\MessageDTO;
use Nekkoy\GatewayAbstract\DTO\ResponseDTO;

/**
 * @method static ResponseDTO send(MessageDTO $message)
 */
class GatewayGoip extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'gateway-goip';
    }
}