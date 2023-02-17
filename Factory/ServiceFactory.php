<?php

namespace Factory;

use Service;
use Exception;

class ServiceFactory
{
    const EMAIL = 'email';

    const SMS = 'sms';

    /**
     * @param string $type
     * @return Service\IService
     * @throws Exception
     */
    public static function build(string $type): Service\IService
    {
        switch ($type) {
            case self::EMAIL:
                return new Service\Email();

            case self::SMS:
                return new Service\Sms();
        }

        throw new Exception('Invalid type');
    }
}