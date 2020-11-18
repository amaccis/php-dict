<?php
declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Query;


interface CommandInterface
{

    public const COMMAND_DEFINE = "DEFINE";

    public const COMMAND_SHOW = "SHOW";

    public const COMMAND_SHOW_INFO = "SHOW INFO";

    public const COMMAND_CLIENT = "CLIENT";

    public const COMMAND_STATUS = "STATUS";

    public const COMMAND_HELP = "HELP";

    public const COMMAND_QUIT = "QUIT";

    public const COMMAND_OPTION = "OPTION";

    public const COMMAND_AUTH = "AUTH";

    public const COMMAND_SASLAUTH = "SASLAUTH";

    public function getCommand(): string;

    public function getWord(): string;

    public function getDatabase(): string;

    public function getStrat(): string;

    public function getN(): string;

    public function __toString(): string;

}