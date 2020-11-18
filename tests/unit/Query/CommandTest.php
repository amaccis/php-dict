<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Tests\Query;


use Amaccis\Dict\Query\Command;
use Amaccis\Dict\Query\CommandInterface;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{

    public function testCreate(): void
    {

        $details = [
            'command' => CommandInterface::COMMAND_DEFINE,
            'word' => 'shortcake',
            'database' => 'wordnet',
            'strat' => '1',
            'n' => '1'
        ];
        $command = new Command($details);
        $this->assertEquals('DEFINE', $command->getCommand());
        $this->assertEquals('shortcake', $command->getWord());
        $this->assertEquals('wordnet', $command->getDatabase());
        $this->assertEquals('1', $command->getStrat());
        $this->assertEquals('1', $command->getN());
        $this->assertEquals('DEFINE:shortcake:wordnet:1:1', $command);

    }

    public function testCreateRaisesException(): void
    {
        $details = [];
        $this->expectException(\InvalidArgumentException::class);
        new Command($details);
    }

}