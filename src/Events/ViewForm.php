<?php

namespace Zerp\FormBuilder\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Zerp\FormBuilder\Models\Form;
use Zerp\FormBuilder\Models\FormResponse;

class ViewForm
{
    use Dispatchable;

    public function __construct(
        public Form $form,
        public FormResponse $response
    ) {}
}