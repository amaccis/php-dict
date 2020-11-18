<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Curl;


interface CurlHandleInterface
{

    /**
     * @param resource $handle
     * @param int $option
     * @param mixed $value
     */
    public function setOpt($handle, int $option, $value): void;

    public function exec(): string;

    public function release(): void;

}