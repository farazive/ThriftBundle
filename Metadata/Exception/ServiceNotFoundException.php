<?php

/*
 * This file is part of the OverblogThriftBundle package.
 *
 * (c) Overblog <http://github.com/overblog/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Overblog\ThriftBundle\Metadata\Exception;

class ServiceNotFoundException extends NotFoundException
{
    public static function createNotFoundException($name)
    {
        return new static(sprintf('Service "%s" not found.', $name));
    }
}
