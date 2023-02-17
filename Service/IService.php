<?php

namespace Service;

interface IService
{
    public function send(string $receiver, string $msg): bool;
}