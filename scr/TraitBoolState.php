<?php declare(strict_types=1);

namespace ManageTextString;

trait TraitBoolState {

    public function isBoolState(bool $includeFlag): bool
    {
        return $includeFlag;
    }

    public function setBoolState(bool $boolState): bool
    {
        return $boolState;
    }

    public function flipBoolState (bool $boolState): bool {
        if ($boolState) {
            return $boolState = false;
        } else {
            return $boolState = true;
        }
    }
}