<?php
//autoload...

$serviceEmail = Factory\ServiceFactory::build(Factory\ServiceFactory::EMAIL);
$serviceEmail->send('xxxx@wwww.aa', 'sadsad');

$serviceSms = Factory\ServiceFactory::build(Factory\ServiceFactory::SMS);
$serviceSms->send('78721321322', 'sadsad');
