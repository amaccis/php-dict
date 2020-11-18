<?php
declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Tests;

use Amaccis\Dict\Client;
use Amaccis\Dict\Query\CommandInterface;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{

    public function testQuery(): void
    {

        $client = new Client();
        $command = [
            'command' => CommandInterface::COMMAND_DEFINE,
            'word' => 'hacker',
            'database' => 'jargon'
        ];
        $response = $client->query('dict.org', $command);

        $this->assertIsArray($response);
        $firstItem = $response[0];
        $this->assertEquals('220', $firstItem->getCode());
        $secondItem = $response[1];
        $this->assertEquals('250', $secondItem->getCode());

    }

}