<?php

declare(strict_types=1);

function __main__(): bool
{
    return count(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)) === 1;
}
