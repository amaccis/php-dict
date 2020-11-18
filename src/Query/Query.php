<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Query;


class Query implements QueryInterface
{

    private UrlInterface $url;

    private CommandInterface $command;

    public function __construct(UrlInterface $url, CommandInterface $command)
    {
        $this->url = $url;
        $this->command = $command;
    }

    public function getUrl(): string
    {
        return (string) $this->url . "/" . (string) $this->command;
    }

}