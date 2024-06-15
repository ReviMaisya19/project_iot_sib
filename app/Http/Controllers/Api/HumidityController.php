<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\humidity;
use Illuminate\Http\Request;
use PhpMqtt\Client\Facades\MQTT;

class HumidityController extends Controller
{
    public function store(Request $request) // Ini adalah fungsi / method untuk menyimpan data temperatur ke dalam database
    {
        $request->validate([ // Memberikan validasi pada inputan
            'value' => 'required|numeric', // Validasi inputan value harus berupa angka
        ]);

        $data = [
            'value'-> $request->value,
        ];

        $mqtt = MQTT::connection();
        $mqtt->publish('sensors/humidity', json_encode($data));

        $humidity = Humidity::create($request->all()); // Menyimpan data temperatur ke dalam database

        return response()->json($humidity, 201); // Memberikan response berupa data temperatur yang telah disimpan ke dalam database
    }
}
