<?php
#Caminhos absolutos
$dirInt=""; // Exemplo: meusite.com/agenda
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'], -1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

// echo DIRPAGE.'<br>'.DIRREQ;

#Banco de Dados
define('HOST','localhost');
define('DB','sistema');
define('USER','root');
define('PASS','');

#Incluir aqquivos
include(DIRREQ.'lib/composer/vendor/autoload.php');