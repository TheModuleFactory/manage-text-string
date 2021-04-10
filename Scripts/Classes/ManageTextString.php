<?php declare(strict_types=1);

namespace AppScripts\Classes;

/**
 * Class ManageTextString
 * @package Package\Classes
 */
class ManageTextString
{
    use \traitDropStatementState, \traitReadTemplate;

    /**
     * @var string
     */
    protected string $textString;

    /**
     * @var array
     */
    protected array $textArray;

    /**
     * @param string $textString
     * @return string|null
     */
    public function setTextString(string $textString): ?string
    {
        return $this->textString = $textString;
    }

    /**
     * @return array|null
     */
    public function setTextArray(): ?array
    {
        return $this->textArray = explode(PHP_EOL, $this->getTextString());
    }

    /**
     * @param string $textString
     * @param string $textToAdd
     * @return string|null
     */
    public function addToTextString(string $textString, string $textToAdd): ?string
    {
        return $this->textString = $this->textString . $textToAdd;
    }

    /**
     * @return string|null
     */
    public function getTextString(): ?string
    {
        return $this->textString;
    }

    /**
     * @return array
     */
    public function getTextArray(): array {
        return $this->textArray;
    }
}