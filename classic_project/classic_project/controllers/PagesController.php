<?php

namespace Controllers;

use Core\App;

class PagesController
{
    public function main()
    {
        $config = App::get('config')['share'];
        return view('main', compact('config'));
    }

    public function all()
    {
        return view('all');
    }
}
