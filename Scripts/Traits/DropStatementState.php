<?php declare(strict_types=1);

/**
 * Trait traitDropStatementState
 */
trait traitDropStatementState {
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