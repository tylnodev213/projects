<?php

namespace App\Http\Controllers\Frontend;

class FrontendController
{
    public function customView($view = null, array $data = [], array $mergeData = []): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $area = 'frontend';
        $tmp = !empty($area) ? $area . '.' : '';
        $view = str($tmp)->append($view);

        return view($view, $data, $mergeData);
    }
}
