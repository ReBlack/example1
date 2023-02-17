<?php

namespace Service;

class Email implements IService
{

    public function send(string $receiver, string $msg): bool
    {
        //...
        return true;
    }
}