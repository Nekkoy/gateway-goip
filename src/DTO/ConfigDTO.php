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
    public string $server;

    /**
     * Логин
     * @var string
     */
    public string $login;

    /**
     * Пароль
     * @var string
     */
    public string $password;

    /**
     * Номер канала для отправки (номер СИМ)
     * @var int
     */
    public int $channel;

    /**
     * @var string
     */
    public string $handler = \Nekkoy\GatewayGoip\Services\SendMessageService::class;
}
