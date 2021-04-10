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
     */
    public function __construct()
    {
        $this->dropStatementState = false;
    }

    /**
     * @return bool
     */
    public function isDropStatementState(): bool
    {
        return $this->dropStatementState;
    }

    /**
     * @param bool $dropStatementState
     */
    public function setDropStatementState(bool $dropStatementState): void
    {
        $this->dropStatementState = $dropStatementState;
    }
}