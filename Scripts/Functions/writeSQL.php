<?php declare(strict_types=1);

function writeSQL (string $writePath = "", string $writeSQL = ""): void {
    if (!empty($writePath) && !empty($writeSQL)) {
        $writeSqlToFile = fopen($writePath, "w") or die("Unable to open file!");

        fwrite($writeSqlToFile, $writeSQL);

        fclose($writeSqlToFile);
    }
}
