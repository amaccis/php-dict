<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict;

use Amaccis\Dict\Response\Response;

interface ClientInterface
{

    /**
     * @param string $uri
     * @param array<string> $command
     * @return array<Response>
     */
    public function query(string $uri, array $command): array;

}