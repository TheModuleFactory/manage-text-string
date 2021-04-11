<?php declare(strict_types=1);

namespace ManageTextString;

/**
 * Trait TraitBoolState
 * @package ManageTextString
 */
trait TraitBoolState {

    /**
     * @param bool $includeFlag
     * @return bool
     */
    public function isBoolState(bool $includeFlag): bool
    {
        return $includeFlag;
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