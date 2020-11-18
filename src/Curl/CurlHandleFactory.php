<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Curl;


class CurlHandleFactory
{

    public static function create(string $url): CurlHandleInterface
    {
        return new CurlHandle($url);
    }

}