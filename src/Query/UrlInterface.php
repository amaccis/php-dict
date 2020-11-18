<?php
declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Query;

/**
 * Interface UrlInterface
 * @package Amaccis\Dict
 *
 * Url Specification
 * dict://<user>:<auth>@<host>:<port>/m:<word>:<database>:<strat>:<n>
 *
 */
interface UrlInterface
{

    public function getScheme(): string;

    public function getUser(): string;

    public function getAuth(): string;

    public function getHost(): string;

    public function getPort(): string;

    public function __toString(): string;

}