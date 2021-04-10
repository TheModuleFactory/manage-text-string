<?php declare(strict_types=1);

namespace AppScripts\Classes\FileSystem;

/**
 * Class ManageTextString
 * @package AppScripts\Classes\FileSystem
 */
class ManageTextString
{
    /**
     * @var string
     */
    protected string $textString;

    /**
     * @param string $textString
     * @return string|null
     */
    public function setTextString(string $textString): ?string
    {
        return $this->textString = $textString;
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
}