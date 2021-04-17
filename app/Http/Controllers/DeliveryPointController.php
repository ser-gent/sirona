<?php

namespace App\Http\Controllers;

use App\Models\DeliveryPoint;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeliveryPointController extends Controller
{

    public function index()
    {
        $deliveryPoints = DeliveryPoint::paginate(15);
        return view('deliveryPoint.index', compact('deliveryPoints'));
    }

    public function show(int $id)
    {
        $point = DeliveryPoint::find($id);
        return view('deliveryPoint.show', compact('point'));
    }

}
