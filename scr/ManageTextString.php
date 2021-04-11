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

use TraitIncludeFlag;
use TraitReadTextFile;

/**
 * Class ManageTextString
 * @package ManageTextString
 */
class ManageTextString
{
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