<?php declare(strict_types=1);

namespace ManageTextString;

/**
 * Trait TraitReadTextFile
 * @package ManageTextString
 */
trait TraitReadTextFile {
    /**
     * @param string $srcFile
     * @return string|null
     */
    public function readFileToString (string $srcFile): ?string
    {
        return file_get_contents($srcFile);
    }

    /**
     * @param string $srcFile
     * @return array|null
     */
    public function readFileToArray (string $srcFile): ?array
    {
        return explode(PHP_EOL, file_get_contents($srcFile));
    }

    public function writeStringToFile (string $writePath = "", string $textOutput = "", string $fileOpenMode = "a"): void {
        if (!empty($writePath) && !empty($textOutput)) {
            $textOutputToFile = fopen($writePath, $fileOpenMode) or die("Unable to open file!");

            fwrite($textOutputToFile, $textOutput);

            fclose($textOutputToFile);
        }
    }
}