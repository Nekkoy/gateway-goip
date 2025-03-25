<?php

namespace Nekkoy\GatewayGoip\DTO;

use Illuminate\Support\Facades\Log;
use Nekkoy\GatewayAbstract\DTO\AbstractConfigDTO;

/**
 *
 */
class ConfigDTO extends AbstractConfigDTO
{
    /**
     * URL на интерфейс GoIP
     * @var string
     */
    public $server;

    /**
     * Логин
     * @var string
     */
    public $login;

    /**
     * Пароль
     * @var string
     */
    public $password;

    /**
     * Номер канала для отправки (номер СИМ)
     * @var int
     */
    public $channel;

    /**
     * @var string
     */
    public $handler = \Nekkoy\GatewayGoip\Services\SendMessageService::class;
}
