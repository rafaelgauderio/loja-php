<?php

class Config
{

    const SITE_URL = "http://localhost";
    const SITE_PASTA = "loja";
    const SITE_NOME = "Loja virtual de serviços de programação";
    const SITE_EMAIL_ADM = "delucaloja@gmail";



    const BD_HOST = "localhost",
        BD_USER = "root",
        BD_SENHA = "",
        BD_BANCO = "lojadeluca",
        BD_PREFIX = "as_";


    //info para enviar email
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "delucaloja@gmail.com";
    const EMAIL_NOME = "Contato da Loja deluca";
    const EMAIL_SENHA = "delucaloja2530*";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    //const EMAIL_COPIA = "email@gmail.com";
}
