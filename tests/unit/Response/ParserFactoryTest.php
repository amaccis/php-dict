<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Tests\Response;


use Amaccis\Dict\Response\Parser;
use Amaccis\Dict\Response\ParserFactory;
use PHPUnit\Framework\TestCase;

class ParserFactoryTest extends TestCase
{

    public function testCreate(): void
    {

        $parser = ParserFactory::create('test');
        $this->assertInstanceOf(Parser::class, $parser);

    }

}