<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Tests\Query;


use Amaccis\Dict\Query\CommandInterface;
use Amaccis\Dict\Query\Query;
use Amaccis\Dict\Query\UrlInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class QueryTest extends TestCase
{

    /** @var UrlInterface&MockObject  */
    private UrlInterface $url;

    /** @var CommandInterface&MockObject  */
    private CommandInterface $command;

    public function setUp(): void
    {
        $this->url = $this->createMock(UrlInterface::class);
        $this->command = $this->createMock(CommandInterface::class);
    }

    public function testCreate(): void
    {

        $this->url->method('__toString')->willReturn('dict://dict.org');
        $this->command->method('__toString')->willReturn('DEFINE:hacker');
        $query = new Query($this->url, $this->command);
        $this->assertEquals('dict://dict.org/DEFINE:hacker', $query->getUrl());

    }

}