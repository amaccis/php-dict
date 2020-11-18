<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict;

use Amaccis\Dict\Curl\CurlHandleFactory;
use Amaccis\Dict\Query\QueryFactory;
use Amaccis\Dict\Response\ParserFactory;
use Amaccis\Dict\Response\Response;


class Client implements ClientInterface
{

    /**
     * @param string $uri
     * @param array<string> $parameters
     * @return array<Response>
     */
    public function query(string $uri, array $parameters): array
    {
        $query = QueryFactory::create($uri, $parameters);
        $curlHandle = CurlHandleFactory::create($query->getUrl());
        $result = $curlHandle->exec();
        $parser = ParserFactory::create($result);
        $response = $parser->parse();
        $curlHandle->release();

        return $response;
    }

}