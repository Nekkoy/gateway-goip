# gateway-goip
SMS Gateway для GSM GoIP

Установка:
```
composer require nekkoy/gateway-goip
```

Конфигурация `.env`
===============
```
# Включить/выключить модуль
GOIP_ENABLED=true

# Адрес GoIP-шлюза
GOIP_SERVER=http://192.168.1.1

# Логин GoIP-шлюза
GOIP_LOGIN=admin

# Пароль GoIP-шлюза
GOIP_PASSWORD=admin

# Номер канала для отправки (слот SIM-карты)
GOIP_CHANNEL=1
```

Использование
===============

Создайте DTO сообщения, передав первым параметром текст, а вторым — номер получателя:
```
$message = new \Nekkoy\GatewayAbstract\DTO\MessageDTO("test", "+380123456789");
```

Затем вызовите метод отправки сообщения через фасад:
```
/** @var \Nekkoy\GatewayAbstract\DTO\ResponseDTO $response */
$response = \Nekkoy\GatewayGoip\Facades\GatewayGoip::send($message);
```

Метод возвращает DTO-ответ с параметрами:
 - message - сообщение об успешной отправке или ошибке
 - code - код ответа:
   - code < 0 - ошибка модуля
   - code > 0 - ошибка HTTP
   - code = 0 - успех
 - id - ID сообщения
