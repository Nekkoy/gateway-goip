<?php

namespace Nekkoy\GatewayGoip\Services;

use Nekkoy\GatewayAbstract\DTO\ResponseDTO;
use Nekkoy\GatewayAbstract\Services\AbstractSendMessageService;
use Nekkoy\GatewayGoip\DTO\ConfigDTO;

/**
 *
 */
class SendMessageService extends AbstractSendMessageService
{
    /** @var ConfigDTO */
    protected $config;

    /**  */
    protected function init() {
        $this->api_url = $this->config->server . "/default/en_US/send.html";
    }

    /** @return mixed */
    protected function data()
    {
        return [
            'u' => $this->config->login,
            'p' => $this->config->password,
            'n' => $this->message->destination,
            'm' => $this->message->text,
            'l' => $this->config->channel
        ];
    }

    /** @return mixed */
    protected function development()
    {
        return '{}';
    }

    /**
     * @return void
     */
    protected function response()
    {
        if( $this->response_code == 200 ) {
            $this->response_code = 0;
        }
    }
}
