<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Curl;

class CurlHandle implements CurlHandleInterface
{

    /** @var resource */
    private $handle;

    public function __construct(string $url)
    {
        $this->handle = curl_init();
        $this->setOpt($this->handle,CURLOPT_RETURNTRANSFER, true);
        $this->setOpt($this->handle,CURLOPT_URL, $url);
    }

    /**
     * @param resource $handle
     * @param int $option
     * @param mixed $value
     */
    public function setOpt($handle, int $option, $value): void
    {
        curl_setopt($handle, $option, $value);
    }

    public function exec(): string
    {
        return (string) curl_exec($this->handle);
    }

    public function release(): void
    {
        curl_close($this->handle);
    }

}