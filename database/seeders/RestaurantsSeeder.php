<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantsSeeder extends Seeder
{
    public function run()
    {
        $restaurants = [
            ["name" => "Kushi Tsuru", "hours" => "Mon-Sun 11:30 am - 9 pm"],
            ["name" => "Osakaya Restaurant", "hours" => "Mon-Thu-Sun 11:30 am - 9 pm / Fri-Sat 11:30 am - 9:30 pm"],
            ["name" => "The Stinking Rose", "hours" => "Mon-Thu-Sun 11:30 am - 10 pm / Fri-Sat 11:30 am - 11 pm"],
            ["name" => "McCormick & Kuleto's", "hours" => "Mon-Thu-Sun 11:30 am - 10 pm / Fri-Sat 11:30 am - 11 pm"],
            ["name" => "Mifune Restaurant", "hours" => "Mon-Sun 11 am - 10 pm"],
            ["name" => "The Cheesecake Factory", "hours" => "Mon-Thu 11 am - 11 pm / Fri-Sat 11 am - 12:30 am / Sun 10 am - 11 pm"],
            ["name" => "New Delhi Indian Restaurant", "hours" => "Mon-Sat 11:30 am - 10 pm / Sun 5:30 pm - 10 pm"],
            ["name" => "Iroha Restaurant", "hours" => "Mon-Thu-Sun 11:30 am - 9:30 pm / Fri-Sat 11:30 am - 10 pm"],
            ["name" => "Rose Pistola", "hours" => "Mon-Thu 11:30 am - 10 pm / Fri-Sun 11:30 am - 11 pm"],
            ["name" => "Alioto's Restaurant", "hours" => "Mon-Sun 11 am - 11 pm"],
            ["name" => "Canton Seafood & Dim Sum Restaurant", "hours" => "Mon-Fri 10:30 am - 9:30 pm / Sat-Sun 10 am - 9:30 pm"],
            ["name" => "All Season Restaurant", "hours" => "Mon-Fri 10 am - 9:30 pm / Sat-Sun 9:30 am - 9:30 pm"],
            ["name" => "Bombay Indian Restaurant", "hours" => "Mon-Sun 11:30 am - 10:30 pm"],
            ["name" => "Sam's Grill & Seafood Restaurant", "hours" => "Mon-Fri 11 am - 9 pm / Sat 5 pm - 9 pm"],
            ["name" => "2G Japanese Brasserie", "hours" => "Mon-Thu-Sun 11 am - 10 pm / Fri-Sat 11 am - 11 pm"],
            ["name" => "Restaurant Lulu", "hours" => "Mon-Thu-Sun 11:30 am - 9 pm / Fri-Sat 11:30 am - 10 pm"],
            ["name" => "Sudachi", "hours" => "Mon-Wed 5 pm - 12:30 am / Thu-Fri 5 pm - 1:30 am / Sat 3 pm - 1:30 am / Sun 3 pm - 11:30 pm"],
            ["name" => "Hanuri", "hours" => "Mon-Sun 11 am - 12 am"],
            ["name" => "Herbivore", "hours" => "Mon-Thu-Sun 9 am - 10 pm / Fri-Sat 9 am - 11 pm"],
            ["name" => "Penang Garden", "hours" => "Mon-Thu 11 am - 10 pm / Fri-Sat 10 am - 10:30 pm / Sun 11 am - 11 pm"],
            ["name" => "John's Grill", "hours" => "Mon-Sat 11 am - 10 pm / Sun 12 pm - 10 pm"],
            ["name" => "Quan Bac", "hours" => "Mon-Sun 11 am - 10 pm"],
            ["name" => "Bamboo Restaurant", "hours" => "Mon-Sat 11 am - 12 am / Sun 12 pm - 12 am"],
            ["name" => "Burger Bar", "hours" => "Mon-Thu-Sun 11 am - 10 pm / Fri-Sat 11 am - 12 am"],
            ["name" => "Blu Restaurant", "hours" => "Mon-Fri 11:30 am - 10 pm / Sat-Sun 7 am - 3 pm"],
            ["name" => "Naan 'N' Curry", "hours" => "Mon-Sun 11 am - 4 am"],
            ["name" => "Shanghai China Restaurant", "hours" => "Mon-Sun 11 am - 9:30 pm"],
            ["name" => "Tres", "hours" => "Mon-Thu-Sun 11:30 am - 10 pm / Fri-Sat 11:30 am - 11 pm"],
            ["name" => "Isobune Sushi", "hours" => "Mon-Sun 11:30 am - 9:30 pm"],
            ["name" => "Viva Pizza Restaurant", "hours" => "Mon-Sun 11 am - 12 am"],
            ["name" => "Far East Cafe", "hours" => "Mon-Sun 11:30 am - 10 pm"],
            ["name" => "Parallel 37", "hours" => "Mon-Sun 11:30 am - 10 pm"],
            ["name" => "Bai Thong Thai Cuisine", "hours" => "Mon-Sat 11 am - 11 pm / Sun 11 am - 10 pm"],
            ["name" => "Alhamra", "hours" => "Mon-Sun 11 am - 11 pm"],
            ["name" => "A-1 Cafe Restaurant", "hours" => "Mon-Wed-Sun 11 am - 10 pm"],
            ["name" => "Nick's Lighthouse", "hours" => "Mon-Sun 11 am - 10:30 pm"],
            ["name" => "Paragon Restaurant & Bar", "hours" => "Mon-Fri 11:30 am - 10 pm / Sat 5:30 pm - 10 pm"],
            ["name" => "Chili Lemon Garlic", "hours" => "Mon-Fri 11 am - 10 pm / Sat-Sun 5 pm - 10 pm"],
            ["name" => "Bow Hon Restaurant", "hours" => "Mon-Sun 11 am - 10:30 pm"],
            ["name" => "San Dong House", "hours" => "Mon-Sun 11 am - 11 pm"],
            ["name" => "Thai Stick Restaurant", "hours" => "Mon-Sun 11 am - 1 am"],
            ["name" => "Cesario's", "hours" => "Mon-Thu-Sun 11:30 am - 10 pm / Fri-Sat 11:30 am - 10:30 pm"],
            ["name" => "Colombini Italian Cafe Bistro", "hours" => "Mon-Fri 12 pm - 10 pm / Sat-Sun 5 pm - 10 pm"],
            ["name" => "Sabella & La Torre", "hours" => "Mon-Thu-Sun 10 am - 10:30 pm / Fri-Sat 10 am - 12:30 am"],
            ["name" => "Soluna Cafe and Lounge", "hours" => "Mon-Fri 11:30 am - 10 pm / Sat 5 pm - 10 pm"],
            ["name" => "Tong Palace", "hours" => "Mon-Fri 9 am - 9:30 pm / Sat-Sun 9 am - 10 pm"],
            ["name" => "India Garden Restaurant", "hours" => "Mon-Sun 10 am - 11 pm"],
            ["name" => "Sapporo-Ya Japanese Restaurant", "hours" => "Mon-Sat 11 am - 11 pm / Sun 11 am - 10:30 pm"],
            ["name" => "Santorini's Mediterranean Cuisine", "hours" => "Mon-Sun 8 am - 10:30 pm"],
            ["name" => "Kyoto Sushi", "hours" => "Mon-Thu 11 am - 10:30 pm / Fri 11 am - 11 pm / Sat 11:30 am - 11 pm / Sun 4:30 pm - 10:30 pm"],
            ["name" => "Marrakech Moroccan Restaurant", "hours" => "Mon-Sun 5:30 pm - 2 am"],
            ["name" => "Parallel 37", "hours" => "Mon-Fri 5 pm - 6:15 pm / Tue 12:15 pm - 12:15 pm / Wed 1:15 pm - 5:45 pm / Thurs-Sat 10 am - 3 pm / Sun 6:30 am - 12:45 pm"]
        ];

        $daysMap = [
            "Mon" => "Monday",
            "Tue" => "Tuesday",
            "Wed" => "Wednesday",
            "Thu" => "Thursday",
            "Fri" => "Friday",
            "Sat" => "Saturday",
            "Sun" => "Sunday",
        ];

        foreach ($restaurants as $index => $restaurant) {
            $restaurantId = DB::table('restaurants')->insertGetId(['name' => $restaurant['name']]);

            $hours = explode('/', $restaurant['hours']);
            foreach ($hours as $period) {
                [$days, $times] = explode(' ', trim($period), 2);
                [$openTime, $closeTime] = explode(' - ', $times);

                $openTime = $this->convertTo24HourFormat($openTime);
                $closeTime = $this->convertTo24HourFormat($closeTime);

                foreach (explode(',', $days) as $day) {
                    $day = trim($day);

                    if (empty($day)) {
                        continue;
                    }

                    $dayRange = explode('-', $day);

                    if (count($dayRange) === 2) {
                        $startDay = $dayRange[0];
                        $endDay = $dayRange[1];

                        if (!isset($daysMap[$startDay]) || !isset($daysMap[$endDay])) {
                            error_log("Invalid day range: $day");
                            continue;
                        }

                        $currentDay = array_search($startDay, array_keys($daysMap));

                        while ($currentDay <= array_search($endDay, array_keys($daysMap))) {
                            DB::table('operating_hours')->insert([
                                'restaurant_id' => $restaurantId,
                                'day' => $daysMap[array_keys($daysMap)[$currentDay]],
                                'opening_time' => $openTime,
                                'closing_time' => $closeTime,
                            ]);
                            $currentDay++;
                        }
                    } else {
                        if (!isset($daysMap[$day])) {
                            error_log("Invalid day abbreviation: $day");
                            continue;
                        }

                        DB::table('operating_hours')->insert([
                            'restaurant_id' => $restaurantId,
                            'day' => $daysMap[$day],
                            'opening_time' => $openTime,
                            'closing_time' => $closeTime,
                        ]);
                    }
                }
            }
        }
    }

    private function convertTo24HourFormat($time)
    {
        return date("H:i:s", strtotime($time));
    }
}
