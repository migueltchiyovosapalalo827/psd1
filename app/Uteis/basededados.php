<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Uteis;
use Illuminate\Container\Container as ContainerAlias;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Facades\DB;
use PDOException;

class basededados
{
    /**
     * @return array
     */
    public static function tentarConectar(): ?array
    {
        $return = array("sucesso"=>"","mensagem"=>"");
        $capsule = new Manager();
        $capsule->addConnection(BD_CONFIG);
        // Bind to Eloquent
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        // Set facades
        DB::setFacadeApplication(new ContainerAlias());
        DB::swap($capsule->getDatabaseManager());
        try {
            DB::connection()->getPdo();
            $return["sucesso"] = true;
            $return["mensagem"] = "sucesso";
            return $return;
        } catch (PDOException $e) {
            $return["sucesso"] = false;
            $return["mensagem"] = $e->getMessage();
            return $return;
        }
    }
}