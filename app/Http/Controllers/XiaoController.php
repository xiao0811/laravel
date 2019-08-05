<?php

namespace App\Http\Controllers;

use App\Models\Users;

class XiaoController
{
    public function index()
    {
        return Users::query()->create([
            "name" => "xiaozang"
        ]);
    }
}
