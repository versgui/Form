<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Config;

use Symfony\Component\Form\FieldBuilder;
use Symfony\Component\Form\FormFactoryInterface;

abstract class AbstractFieldConfig implements FieldConfigInterface
{
    public function configure(FieldBuilder $builder, array $options)
    {
    }

    public function createBuilder(array $options)
    {
        return null;
    }

    public function getDefaultOptions(array $options)
    {
        return array();
    }

    public function getIdentifier()
    {
        return get_class($this);
    }
}