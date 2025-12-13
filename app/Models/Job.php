<?php

namespace App\Models;



class Job
{
    public static function all()
    {
        return [
            ['title' => 'Software Engineer', 'salary' => '1000$'],
            ['title' => 'Data Scientist', 'salary' => '1200$'],
        ];
    }
}
