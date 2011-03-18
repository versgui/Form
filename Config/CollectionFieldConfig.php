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
use Symfony\Component\Form\EventListener\ResizeFormListener;

class CollectionFieldConfig extends AbstractFieldConfig
{
    public function configure(FieldBuilder $builder, array $options)
    {
        if ($options['modifiable']) {
            $builder->add($options['prototype'], '$$name$$', array(
                'property_path' => null,
                'required' => false,
            ));
        }

        $listener = new ResizeFormListener($builder->getFormFactory(),
                $options['prototype'], $options['modifiable']);

        $builder->addEventSubscriber($listener, 10);
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'template' => 'collection',
            'prototype' => null,
            'modifiable' => false,
            'prototype' => 'text',
        );
    }

    public function getParent(array $options)
    {
        return 'form';
    }

    public function getIdentifier()
    {
        return 'collection';
    }
}