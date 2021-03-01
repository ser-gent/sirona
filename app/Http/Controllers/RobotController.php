<?php

namespace App\Http\Controllers;

use App\Models\Robot;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RobotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $robots = Robot::all();
        return view('robot.index', compact('robots'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Robot $robot)
    {
        $robot = Robot::where('id', $robot)->firstOrFail();
        return view('robot.show', compact('robot'));
    }

    public function edit(Robot $robot)
    {
        //
    }

    public function update(Request $request, Robot $robot)
    {
        //
    }


    public function destroy(Robot $robot)
    {
        //
    }
}
