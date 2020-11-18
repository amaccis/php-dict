<?php

declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Response;

interface ResponseInterface
{

    public const DICT_N_DATABASES_PRESENT = 110;
    public const DICT_N_STRATEGIES_AVAILABLE = 111;
    public const DICT_DATABASE_INFORMATION_FOLLOWS = 112;
    public const DICT_HELP_TEXT_FOLLOWS = 113;
    public const DICT_SERVER_INFORMATION_FOLLOWS = 114;
    public const DICT_CHALLENGE_FOLLOWS = 130;
    public const DICT_N_DEFINITIONS_RETRIEVED = 150;
    public const DICT_WORD_DATABASE_NAME = 151;
    public const DICT_N_MATCHES_FOUND = 152;
    public const DICT_OPTIONAL_TIMING_AND_STATISTICAL_INFORMATION = 201;
    public const DICT_TEXT_MSG_ID = 220;
    public const DICT_CLOSING_CONNECTION = 221;
    public const DICT_AUTHENTICATION_SUCCESSFUL = 230;
    public const DICT_OK = 250;
    public const DICT_SEND_RESPONSE = 330;
    public const DICT_SERVER_TEMPORARILY_UNAVAILABLE = 420;
    public const DICT_SERVER_SHUTTING_DOWN_AT_OPERATOR_REQUEST = 421;
    public const DICT_SYNTAX_ERROR_COMMAND_NOT_RECOGNIZED = 500;
    public const DICT_SYNTAX_ERROR_ILLEGAL_PARAMETERS = 501;
    public const DICT_COMMAND_NOT_IMPLEMENTED = 502;
    public const DICT_COMMAND_PARAMETER_NOT_IMPLEMENTED = 503;
    public const DICT_ACCESS_DENIED = 530;
    public const DICT_ACCESS_DENIED_USE_SHOW_INFO_FOR_SERVER_INFORMATION = 531;
    public const DICT_ACCESS_DENIED_UNKNOWN_MECHANISM = 532;
    public const DICT_INVALID_DATABASE_USE_SHOW_DB_FOR_LIST_OF_DATABASES = 550;
    public const DICT_INVALID_STRATEGY_USE_SHOW_STRAT_FOR_A_LIST_OF_STRATEGIES = 551;
    public const DICT_NO_MATCH = 552;
    public const DICT_NO_DATABASES_PRESENT = 554;
    public const DICT_NO_STRATEGIES_AVAILABLE = 555;

    public function getCode(): string;

    public function getText(): string;

}