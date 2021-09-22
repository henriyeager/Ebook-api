<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            'NIS' => 3103119086,
            'Name' => 'Henri Syaputra',
            'Gender' => 'Male',
            'Phone' => '+62 823-2460-0799',
            'Class' => 'XII RPL 4'
        ];
    }
}