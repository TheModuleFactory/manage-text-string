<?php declare(strict_types=1);

/**
 * @copyright 2021 &copy; Steve R. Lewis, The Module Factory Ltd.
 *
 * @author Steve R. Lewis <steve@themodulefactory.com>
 * The Module Factory Ltd. Company Number; 09989173
 * https://www.themodulefactory.com
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
 *
 * @version 1.0.0
 *
 * Trait traitDropStatementState
 */
trait TraitDropStatementState {
    /**
     * @var bool
     */
    protected bool $dropStatementState;

    /**
     * traitDropStatementState constructor.
     * @param bool $boolState
     */
    public function __construct(bool $boolState = false)
    {
        $this->dropStatementState = $boolState;
    }

    /**
     * @param bool $dropStatementState
     */
    public function setDropStatementState(bool $dropStatementState = false): void
    {
        $this->dropStatementState = $dropStatementState;
    }

    /**
     * @return bool
     */
    public function isDropStatementState(): bool
    {
        return $this->dropStatementState;
    }

    /**
     * @return bool
     */
    public function flipDropStatementState(): bool {
        if ($this->dropStatementState) {
            return $this->dropStatementState = false;
        } else {
            return $this->dropStatementState = true;
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