<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index()
    {
        $jobs = job::all();
        return view('job/index', ['jobs' => $jobs, 'name' => 'belal']);
    }
}
