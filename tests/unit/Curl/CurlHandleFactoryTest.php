<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Tests\Curl;


use Amaccis\Dict\Curl\CurlHandle;
use Amaccis\Dict\Curl\CurlHandleFactory;
use PHPUnit\Framework\TestCase;

class CurlHandleFactoryTest extends TestCase
{

    public function testCreate(): void
    {

        $curlHandle = CurlHandleFactory::create('dict.org');
        $this->assertInstanceOf(CurlHandle::class, $curlHandle);

    }

}