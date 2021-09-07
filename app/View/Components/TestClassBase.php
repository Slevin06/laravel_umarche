<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $classBaseMessage;
    public $defaultClassBaseMessage;

    public function __construct($classBaseMessage, $defaultClassBaseMessage='クラスベースのメッセージの初期値')
    {
        $this->classBaseMessage = $classBaseMessage;
        $this->defaultClassBaseMessage = $defaultClassBaseMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tests.test-class-base');
    }
}
