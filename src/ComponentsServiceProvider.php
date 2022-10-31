<?php

namespace Jah\Components;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Jah\Components\Commands\ComponentsCommand;

class ComponentsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->bootComponents();
    }

    private function bootComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $bladeCompiler): void {
            $prefix = config('components.prefix', '');

            /** @var BladeComponent $component */
            foreach (config('components.list', []) as $alias => $component) {
                $bladeCompiler->component($component, $alias, $prefix);
            }
        });
    }
}
