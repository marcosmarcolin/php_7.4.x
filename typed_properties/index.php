<?php

/* PHP 7.4 - PROPRIEDADES TIPADAS */

/* Alertar todos os erros */
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ERROR);

/* Inclusao da Classe e Criaçao da Instancia dela */
include 'Usuario.php';
$Usuario = new Usuario();
$Usuario->setAtributos();
$Usuario->imprimir();