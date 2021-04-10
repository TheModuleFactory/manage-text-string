<?php declare(strict_types=1);

/**
 * Trait traitReadTextFile
 */
trait traitReadTextFile {
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
}