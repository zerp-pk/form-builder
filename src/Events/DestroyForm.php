<?php

namespace Zerp\FormBuilder\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Zerp\FormBuilder\Models\Form;

class DestroyForm
{
    use Dispatchable;

    public function __construct(
        public Form $form
    ) {}
}