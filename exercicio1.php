<?php

$emails = "  ADMIN@EMPRESA.COM ,  contato@Site.COM  ,SUPORTE@dominio.com  ,   Vendas@Empresa.com ";

$lista_emails = explode(',', $emails);

$email_bonito = strtolower(trim($lista_emails[0]));

echo "E-mail principal: ".$email_bonito;
?>