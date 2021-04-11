<?php declare(strict_types=1);

/**
 * @copyright 2021 &copy; Steve R. Lewis, The Module Factory Ltd.
 *
 * @author Steve R. Lewis <steve@themodulefactory.com>
 * The Module Factory Ltd. Company Number; 09989173
 * https://www.themodulefactory.com
 *
 * A small package built for a private project to manage text read from a file from which a text object is created.
 *
 * This program is free software: you can redistribute it and/or modify it under the terms of the
 * GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @license https://github.com/TheModuleFactory/file-system-tree/blob/main/LICENSE
 * See the GNU Affero General Public License Version 3 for more details.
 * You should have received a copy of the GNU Affero General Public License along with this program.
 * If not, see <https://www.gnu.org/licenses/>.
 */

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

    /**
     * @param string $writePath
     * @param string $textOutput
     * @param string $fileOpenMode
     */
    public function writeStringToFile (string $writePath = "", string $textOutput = "", string $fileOpenMode = "a"): void {
        if (!empty($writePath) && !empty($textOutput)) {
            $textOutputToFile = fopen($writePath, $fileOpenMode) or die("Unable to open file!");

            fwrite($textOutputToFile, $textOutput);

            fclose($textOutputToFile);
        }
    }

    /**
     * @param string $writePath
     * @param string $arrayOutput
     * @param string $fileOpenMode
     */
    public function writeArrayToFile (string $writePath = "", string $arrayOutput = "", string $fileOpenMode = "a"): void {
        if (!empty($writePath) && !is_null($arrayOutput)) {
            $textOutputToFile = fopen($writePath, $fileOpenMode) or die("Unable to open file!");

            foreach($arrayOutput as $key=>$arrayItem) {
                fwrite($textOutputToFile, $arrayItem);
            }

            fclose($textOutputToFile);
        }
    }
}