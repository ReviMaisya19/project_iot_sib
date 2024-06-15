<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sensor;
use PhpMqtt\Client\Facades\MQTT;

class SensorController extends Controller
{
    public function index(Request $request) 
    {
        $type = $request->type;
        $sensors = Sensor::orderBy("id", "asc");
        if ($type) {
            $sensors = $sensors->where("type", $type);
        }
        $sensors = $sensors->get();

        return response()->json($sensors);
    }

    public function store(Request $request) 
    {
        $request->validate([ 
            'type' => 'required', 
            'value' => 'required|numeric', 
        ]);

        $topic = 'sensors/' . $request->type;
        $data = [
            'value'-> $request->value,
        ];

        $mqtt = MQTT::connection();
        $mqtt->publish($topic, json_encode($data));

        $sensor = Sensor::create($request->all());

        return response()->json($sensor, 201);
    }
}
