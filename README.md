**Это пример  реализации задачи в ООП стиле**

Дан  код  нужно оформить его в ООП стиле 

function  sendBaseEmail(string $receiver, string $text) {
  //…
}

function  sendBaseSms(string $receiver, string $text) {
  //…
}

function sendMessage(string $type, string $receiver, string $text) {
  switch ($type) {
    case ‘emac_base’:
      return sendBaseEmail($receiver, $text);
         case ‘sms_base’:
      return sendBaseSms($receiver, $text);
  }
} 
