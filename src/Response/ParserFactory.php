<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Response;


class ParserFactory
{
    public static function create(string $result): ParserInterface
    {
        return new Parser($result);
    }

}