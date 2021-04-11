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

/**
 * Trait TraitIncludeFlag
 */
trait TraitIncludeFlag {
    /**
     * @var bool
     */
    protected bool $includeFlag;

    /**
     * TraitIncludeFlag constructor.
     * @param bool $boolState
     */
    public function __construct(bool $boolState = false)
    {
        $this->includeFlag = $boolState;
    }

    /**
     * @param bool $includeFlag
     */
    public function setIncludeFlag(bool $includeFlag = false): void
    {
        $this->includeFlag = $includeFlag;
    }

    /**
     * @return bool
     */
    public function isIncludeFlag(): bool
    {
        return $this->includeFlag;
    }

    /**
     * @return bool
     */
    public function flipIncludeFlag(): bool {
        if ($this->includeFlag) {
            return $this->includeFlag = false;
        } else {
            return $this->includeFlag = true;
        }
    }

    /**
     * @param bool $boolState
     * @return bool
     */
    public function setBoolState(bool $boolState): bool
    {
        return $boolState;
    }

    /**
     * @param bool $boolState
     * @return bool
     */
    public function flipBoolState (bool $boolState): bool {
        if ($boolState) {
            return $boolState = false;
        } else {
            return $boolState = true;
        }
    }
}