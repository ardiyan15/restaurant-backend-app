<?php

namespace App\Repositories;

use App\Models\Restaurant;
use App\Interfaces\RestaurantRepositoryInterface;
use App\Models\OperatingHour;

class RestaurantRepository implements RestaurantRepositoryInterface
{
    public function index($data)
    {
        $restaurants = Restaurant::select('id', 'name', 'created_at',)->with(['operatingHours' => function ($query) {
            $query->select('id', 'restaurant_id', 'day', 'opening_time', 'closing_time');
        }]);

        if (!empty($data['name'])) {
            $restaurants->where('name', $data['name']);
        }

        if (!empty($data['day'])) {
            $restaurants->whereHas('operatingHours', function ($query) use ($data) {
                $query->where('day', $data['day']);
            });
        }

        if (!empty($data['opening_time'])) {
            $restaurants->whereHas('operatingHours', function ($query) use ($data) {
                $query->where('opening_time', '>=', $data['opening_time']);
            });
        }

        if (!empty($data['closing_time'])) {
            $restaurants->whereHas('operatingHours', function ($query) use ($data) {
                $query->where('closing_time', '<=', $data['closing_time']);
            });
        }

        if (!empty($data['date'])) {
            $restaurants->whereDate('created_at', $data['date']);
        }

        $restaurants = $restaurants->orderBy('id', 'desc')->paginate(10);

        return $restaurants;
    }

    public function getById($id)
    {
        return Restaurant::findOrFail($id);
    }

    public function store(array $data)
    {
        if ($data['roles'] != 'admin') {
            $data = [
                'data' => [],
                'message' => 'Forbidden',
                'code' => 403,
            ];

            return $data;
        }

        $name = $data['name'];
        $operating_hours = $data['operating_hours'];

        $operating_hour_temp = [];

        $restaurant = Restaurant::create([
            'name' => $name
        ]);

        $restaurant_id = $restaurant->id;

        foreach ($operating_hours as $day => $hour) {
            $split_hour = explode(' - ', $hour);
            $opening_time = $split_hour[0];
            $closing_time = $split_hour[1];
            $operating_hour_temp[] = [
                'restaurant_id' => $restaurant_id,
                'day' => $day,
                'opening_time' => $opening_time,
                'closing_time' => $closing_time
            ];
        }

        OperatingHour::insert($operating_hour_temp);

        $data['message'] = 'Restaurant created successfully';
        $data['code'] = 200;

        return $data;
    }

    public function update(array $data, $id)
    {
        return Restaurant::whereId($id)->update($data);
    }

    public function delete($id)
    {
        Restaurant::destroy($id);
    }
}
