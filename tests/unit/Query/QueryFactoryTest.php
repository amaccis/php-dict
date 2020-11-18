<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Tests\Query;


use Amaccis\Dict\Query\Query;
use Amaccis\Dict\Query\QueryFactory;
use PHPUnit\Framework\TestCase;

class QueryFactoryTest extends TestCase
{

    public function testCreate(): void
    {

        $query = QueryFactory::create('user:auth@dict.org', ['command' => 'define', 'word' => 'hacker']);
        $this->assertInstanceOf(Query::class, $query);
        $this->assertEquals('dict://user:auth@dict.org:2628/define:hacker', $query->getUrl());

    }

}