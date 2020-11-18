<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Response;


interface ParserInterface
{

    /**
     * @return Response[]
     */
    public function parse(): array;

}