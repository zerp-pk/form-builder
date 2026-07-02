<?php

namespace Zerp\FormBuilder\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Zerp\FormBuilder\Models\Form;
use Zerp\FormBuilder\Models\FormConversion;

class FormConverted
{
    use Dispatchable;

    public function __construct(
        public Request $request,
        public Form $form,
        public FormConversion $conversion
    ) {}
}