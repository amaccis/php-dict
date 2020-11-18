<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Response;


class Response implements ResponseInterface
{

    private string $code;

    private string $text;

    public function __construct(string $code, string $text)
    {
        $this->code = $code;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

}