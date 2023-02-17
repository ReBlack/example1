<?php

namespace Service;

class Sms implements IService
{

    public function send(string $receiver, string $msg): bool
    {
        //...
        return true;
    }
}