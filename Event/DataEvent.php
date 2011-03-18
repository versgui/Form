<?php

namespace Symfony\Component\Form\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Form\FieldInterface;

class DataEvent extends Event
{
    private $field;

    protected $data;

    public function __construct(FieldInterface $field, $data)
    {
        $this->field = $field;
        $this->data = $data;
    }

    public function getField()
    {
        return $this->field;
    }

    public function getData()
    {
        return $this->data;
    }
}