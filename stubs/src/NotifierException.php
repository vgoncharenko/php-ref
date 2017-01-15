<?php

/*
 * This file is part of the pinepain/php-ref PHP extension.
 *
 * Copyright (c) 2016-2017 Bogdan Padalko <pinepain@gmail.com>
 *
 * Licensed under the MIT license: http://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source or visit
 * http://opensource.org/licenses/MIT
 */


namespace Ref;


use Exception;
use Throwable;


class NotifierException extends Exception
{
    private $exceptions = [];

    /**
     * Get exceptions that were thrown from notifiers
     *
     * @return Throwable[]
     */
    public function getExceptions() : array
    {
        return $this->exceptions;
    }
}
