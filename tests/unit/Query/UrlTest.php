<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Tests\Query;


use Amaccis\Dict\Query\Url;
use PHPUnit\Framework\TestCase;

class UrlTest extends TestCase
{

    public function testCreate(): void
    {

        $url = new Url('user:auth@dict.org');
        $this->assertEquals('dict', $url->getScheme());
        $this->assertEquals('user', $url->getUser());
        $this->assertEquals('auth', $url->getAuth());
        $this->assertEquals('dict.org', $url->getHost());
        $this->assertEquals('2628', $url->getPort());
        $this->assertEquals('dict://user:auth@dict.org:2628', $url);

    }

    public function testCreateRaisesException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        new Url('dict:dict:dict:dict');
    }

}