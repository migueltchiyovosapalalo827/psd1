<?php

/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

#comentar as duas linhas em modo de desenvolvimento , descomente em modo de produção
#ini_set('display_errors', 0 );
#error_reporting(0);


#devido o problema em localizar o ficheiro config em diferentes sistemas estou usando esta constante para ser usada na subistituição de caminhos.
define("config", "public");

/*function SESSAO()
{
    # code...
    return Sessoes::obter_tudo();
}*/


#Localização da raiz do sistema
define("APP_ROOT", str_replace(config, "App/", __DIR__));


#Localização da rais do sistema
define("raiz", str_replace(config, "", __DIR__));

#Localização da rais do sistema
define("SITE", "Devgonga");

#Chave de incripitação de senhas do sistema, usado para incripitar e desencripitar senhas.
define("APP_KEY", '@McQfTjWmZq4t7w!');


#Localização da pasta de interfaces já renderizadas
define("APP_VIEWS_TEMP", str_replace(config, "tmp/Views/", __DIR__));

/*
 * Configurações da base de dados
 * "driver" => "tipo de base de dados ex:mysql",
 * "host" =>"Endereço do servidor da base de dados.",
 * "database" => "Nome da base de dados por conveção usar psd",
 * "username" => "Usuario",
 * "password" => "Senha"
 * */
define(
    "BD_CONFIG",
    [
        "driver" => "mysql",
        "host" => "localhost",
        "database" => "psd",
        "username" => "root",
        "password" => ""
    ]
);

/*
 * Configurações da pasta com ficheiros publicos
 * Aqui configurace onde ficaram os ficheiros dos livros, etc
 *
 * */
define(
    "APP_PUBLIC",
    [
        "livros" =>
        [
            "capas" => str_replace(config, "public/ficheiros/livros/capas/", __DIR__),
            "ficheiros" => str_replace(config, "public/ficheiros/livros/ficheiros/", __DIR__)
        ],
        "pesquisadores" =>
        [
            "imagens" => str_replace(config, "public/ficheiros/pesquisadores/imagens/", __DIR__),
        ],
        "instituicao" =>
        [
            "fotos" => str_replace(config, "public/ficheiros/escolas/fotos/", __DIR__),
            "emissao" => str_replace(config, "public/ficheiros/escolas/doc_emiss_certificado/", __DIR__),
            "declaracao" => str_replace(config, "public/ficheiros/escolas/doc_emiss_declaracao/", __DIR__),
            "logotipo" => str_replace(config, "public/ficheiros/escolas/logotipo/", __DIR__),
        ],
        "inqueritos" =>
        [
            "logotipos" => str_replace(config, "public/ficheiros/inqueritos/logotipos/", __DIR__),
        ],
    ]
);
/*
 * Configurações basica do sistema
 * Nome: é o nome dado ao sistema
 * Desenvolvedor: O responsavel por desenvolver o sistema
 * Max imagem : tamanho maximo ao inviar uma imagem ao servidor em kb
 * Max ficheiro : tamanho maximo ao inviar um ficheiro ao servidor em kb
 * Usurio : sera o usuario padrão aquele que vai ser criado na primeira instalação do sistema
 * */
define(
    "SISTEMA",
    [
        "nome" => "PSD",
        "desenvolvedor" => "Fabricio Gonga e Pinto Filipe",
        "max_imagem" => 5000000,
        "max_ficheiro" => 300000000000000,
        "usuario" => [
            "nome" => "PSD",
            "sobrenome" => "CENTRAL",
            "usuario" => "psd.central",
            "email" => "centralpsd@hotmail.com",
            "contacto" => "993333333",
            "senha" => "psd@center"
        ]
    ]
);
#Para formatação das datas.
date_default_timezone_set('UTC');
