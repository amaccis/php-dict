<?php
declare(strict_types=1);

/**
 * @author Andrea Maccis <andrea.maccis@gmail.com>
 */

namespace Amaccis\Dict\Response;


class Parser implements ParserInterface
{

    private const REGEX_PATTERN_CODE = '/%s /';

    private const REGEX_PATTERN_CODES = '/[1-5][0-58][0-9] /';

    private string $result;

    /**
     * @var string[]
     */
    private array $codes;

    public function __construct(string $result)
    {
        $this->result = $result;
        $this->codes = $this->getCodes();
    }

    public function parse(): array
    {

        $responses = [];
        foreach ($this->codes as $index => $code) {
            $nextCode = isset($this->codes[$index + 1]) ? $this->codes[$index + 1] : null;
            $text = $this->extractText($code, $nextCode);
            $response = new Response($code, $text);
            $responses[] = $response;
        }

        return $responses;
    }

    /**
     * @return string[]
     */
    private function getCodes(): array
    {
        preg_match_all(self::REGEX_PATTERN_CODES, $this->result, $codes);
        return array_map('trim', $codes[0]);
    }

    private function extractText(string $currentCode, ?string $nextCode): string
    {

        $leftPatternPosition = $this->getPatternPosition($currentCode, 4);
        $this->result = substr($this->result, $leftPatternPosition);
        $rightPatternPosition = ($nextCode) ? $this->getPatternPosition($nextCode) : strlen($this->result);
        $text = trim(substr($this->result, 0, $rightPatternPosition));
        $this->result = substr($this->result, $rightPatternPosition);
        return $text;

    }

    private function getPatternPosition(string $code, int $additionalChars = 0): int
    {

        $stringPattern = sprintf(self::REGEX_PATTERN_CODE, $code);
        preg_match($stringPattern, $this->result,$stringMatch, PREG_OFFSET_CAPTURE);
        return (int) $stringMatch[0][1] + $additionalChars;

    }

}