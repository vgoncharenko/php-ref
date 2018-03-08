<?php declare(strict_types=1);

/*
 * This file is part of the pinepain/php-ref PHP extension.
 *
 * Copyright (c) 2016-2018 Bogdan Padalko <pinepain@gmail.com>
 *
 * Licensed under the MIT license: http://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source or visit
 * http://opensource.org/licenses/MIT
 */

namespace Ref;

class SoftReference extends AbstractReference
{
    /**
     * {@inheritdoc}
     */
    public function __construct($referent, $notify = null)
    {
        parent::__construct($referent, $notify);

        __storage('soft')[spl_object_hash($referent)] = $this;
    }
}
