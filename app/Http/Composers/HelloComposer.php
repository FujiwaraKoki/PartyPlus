<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer{
    public function Compose(View $view): void
    {
        $view->with('view_message', 'This view is "'.$view->getName().'"!');
    }
}
