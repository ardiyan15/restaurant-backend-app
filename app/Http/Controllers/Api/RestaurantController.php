<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Interfaces\RestaurantRepositoryInterface;
use Illuminate\Http\Request;
use App\Classes\ApiResponseClass;

class RestaurantController extends Controller
{
    private RestaurantRepositoryInterface $restaurantRepositoryInterface;

    public function __construct(RestaurantRepositoryInterface $restaurantRepositoryInterface)
    {
        $this->restaurantRepositoryInterface = $restaurantRepositoryInterface;
    }

    public function index(Request $request)
    {
        $name = $request->query('name');
        $day = $request->query('day');
        $opening_time = $request->query('opening_time');
        $closing_time = $request->query('closing_time');
        $grand_opening = $request->query('grand_opening');
        $date = $request->query('date');

        $data_query = [
            'name' => $name,
            'day' => $day,
            'opening_time' => $opening_time,
            'closing_time' => $closing_time,
            'grand_opening' => $grand_opening,
            'date' => $date
        ];

        $data = $this->restaurantRepositoryInterface->index($data_query);

        $result = [
            'data' => $data,
            'code' => 200
        ];

        return ApiResponseClass::sendResponse($result, 'Restaurants retrieved successfully.', 200);
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $operating_hours = $request->operating_hours;
        $roles = $request->roles;

        $data = [
            'name' => $name,
            'operating_hours' => $operating_hours,
            'roles' => $roles
        ];

        DB::beginTransaction();
        try {
            $data = $this->restaurantRepositoryInterface->store($data);
            DB::commit();

            $message = $data['message'];
            unset($data['message']);
            $result = [
                'data' => $data,
                'code' => $data['code']
            ];


            return ApiResponseClass::sendResponse($result, $message, 200);
        } catch (\Exception $e) {
            return ApiResponseClass::rollback($e);
        }
    }
}
