<?php

final class Continuation
{
    /**
     * @return bool True if the continuation is still pending, that is, if neither {@see resume()} or {@see throw()}
     *              has been called.
     */
    public function isPending(): bool { }

    /**
     * Resumes the fiber, returning the given value from {@see Fiber::suspend()}.
     *
     * @param mixed $value
     *
     * @throw FiberError If the continuation has already been used.
     */
    public function resume(mixed $value = null): void { }

    /**
     * Throws the given exception into the fiber from {@see Fiber::suspend()}.
     *
     * @param Throwable $exception
     *
     * @throw FiberError If the continuation has already been used.
     */
    public function throw(Throwable $exception): void { }

    /**
     * Cannot be constructed by user code.
     */
    private function __construct() { }
}
