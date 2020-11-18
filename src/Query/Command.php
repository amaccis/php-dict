<?php
declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Query;


class Command implements CommandInterface
{

    private string $command;

    private string $word;

    private string $database;

    private string $strat;

    private string $n;

    /**
     * Command constructor.
     * @param string[] $parameters
     */
    public function __construct(array $parameters)
    {
        if (!isset($parameters['command']) || !isset($parameters['word'])) {
            throw new \InvalidArgumentException('Malformed command');
        }
        $this->command = $parameters['command'] ?? '';
        $this->word = $parameters['word'] ?? '';
        $this->database = $parameters['database'] ?? '';
        $this->strat = $parameters['strat'] ?? '';
        $this->n = $parameters['n'] ?? '';
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function getWord(): string
    {
        return $this->word;
    }

    public function getDatabase(): string
    {
        return $this->database;
    }

    public function getStrat(): string
    {
        return $this->strat;
    }

    public function getN(): string
    {
        return $this->n;
    }

    public function __toString(): string
    {
        return $this->command .
            (empty($this->word) ? '' : ':' . $this->word) .
            (empty($this->database) ? '' : ':' . $this->database) .
            (empty($this->strat) ? '' : ':' . $this->strat) .
            (empty($this->n) ? '' : ':' . $this->n);
    }

}