<?php
$name ="honoré";
$amount=200;
//HEREDOC
echo <<<EOT
HELLO "$name". tu est "$amount".cool

EOT;
//HEREDOC les variables ne seront plus inter^pretés
echo <<<'blade'
HELLO "$name". tu est "$amount".cool

blade;


?>
