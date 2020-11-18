<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Query;


class QueryFactory
{

    /**
     * @param string $uri
     * @param string[] $parameters
     * @return QueryInterface
     */
    public static function create(string $uri, array $parameters): QueryInterface
    {
        $url = new Url($uri);
        $command = new Command($parameters);
        return new Query($url, $command);
    }

}