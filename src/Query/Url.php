<?php
declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Query;

class Url implements UrlInterface
{

    public const DICT_PROTOCOL = 'dict';

    public const DICT_PORT = 2628;

    private string $scheme;

    private string $user;

    private string $auth;

    private string $host;

    private string $port;

    public function __construct(string $url)
    {

        $parts = parse_url(self::DICT_PROTOCOL . '://' . $url);
        if ($parts === false) {
            throw new \InvalidArgumentException('Malformed URL: ' . $url);
        }
        $this->scheme = $parts['scheme'] ?? '';
        $this->user = $parts['user'] ?? '';
        $this->auth = $parts['pass'] ?? '';
        $this->host = $parts['host'] ?? '';
        $this->port = isset($parts['port']) ? (string) $parts['port'] : (string) self::DICT_PORT;

    }

    public function getScheme(): string
    {
        return $this->scheme;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getAuth(): string
    {
        return $this->auth;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getPort(): string
    {
        return $this->port;
    }

    public function __toString(): string
    {
        return $this->scheme . '://' .
            (empty($this->user) ? '' : $this->user . ':') .
            (empty($this->auth) ? '' : $this->auth . '@') .
            $this->host . ':' . $this->port;
    }

}