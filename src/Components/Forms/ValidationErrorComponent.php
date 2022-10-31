<?php

declare(strict_types=1);

namespace Jah\Components\Components\Forms;

use Illuminate\Support\ViewErrorBag;
use Illuminate\View\Component;
use Illuminate\View\View;

/**
 * Class ValidationErrorComponent
 *
 * NOTE: we take this component from the blade-ui-kit because we wanted to provide a separate package
 * for the components we use in the reiziger platform. All copyrights of the components go to them.
 *
 * @copyright Blade-ui-kit
 *
 * @see https://github.com/blade-ui-kit/blade-ui-kit/blob/0.x/src/Components/Forms/Error.php
 */
class ValidationErrorComponent extends Component
{
    public function __construct(
        public readonly string $field,
        public readonly string $bag = 'default',
    ) {
    }

    public function render(): View
    {
        return view('components::components.forms.validation-error');
    }

    public function messages(ViewErrorBag $errorBag): array
    {
        $bag = $errorBag->getBag($this->bag);

        return $bag->has($this->field) ? $bag->get($this->field) : [];
    }
}
