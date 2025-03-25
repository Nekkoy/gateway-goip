<?php

namespace Nekkoy\GatewayGoip\Services;

use Nekkoy\GatewayGoip\DTO\ConfigDTO;
use Nekkoy\GatewayAbstract\Services\AbstractSendMessageService;

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

    /** @return array */
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

    /** @return string */
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
