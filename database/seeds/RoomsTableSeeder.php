<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Room::create([
            'title' => 'Superior Room',
            'description' => 'Specially designed for a couple, honeymooner or friends. A home comfort of 35-sqm room, choice twin bed or king bed is an elegant heaven decoration with stylish furnishing and balcony. Room can accommodate up to 2 people. All rooms are facilitated with complimentary Wi-Fi, satellite TV Channel, tea and coffee making facilities, standing shower bath room with personal bath amenities. Thinking about more spacious room and benefit? Visit our Family Room and Suite Collection.',
            'capacity' => '2 - 4',
            'area' => 45,
            'bed_type' => 'Kingsize',
            'hotel_id' => 1,
            'user_id' => 1
        ]);

        \App\Room::create([
            'title' => 'Deluxe Room',
            'description' => 'A modern appointed accommodation of 48-sqm room with spacious bedroom overlooking Jimbaran Hill. It is subtly blended between modern design and classy Balinese artwork. All rooms are facilitated with complimentary wifi, tea and coffee making facilities. Thinking about more spacious room and benefit? Visit our Family Room and Suite Collection.',
            'capacity' => '2 - 4',
            'area' => 48,
            'bed_type' => 'Kingsize',
            'hotel_id' => 1,
            'user_id' => 1
        ]);

        \App\Room::create([
            'title' => 'Junior Suite Room',
            'description' => 'Junior Suite is the hotel’s premier accommodation category that truly defines luxury. A 56-sqm accommodation that provide an elevated level of hospitality. All rooms are facilitated with complimentary WiFi, tea and coffee making facilities.',
            'capacity' => '2 - 4',
            'area' => 56,
            'bed_type' => 'Kingsize',
            'hotel_id' => 1,
            'user_id' => 1
        ]);

        \App\Room::create([
            'title' => 'Executive Suite',
            'description' => 'The 100–sqm suite anticipates every conceivable need of the discerning global traveler, with the latest modern conveniences. The Suite offers a separate integrated living and bedroom area for entertaining and relaxing. All rooms are facilitated with complimentary WiFi, tea and coffee making facilities.',
            'capacity' => '2 - 4',
            'area' => 100,
            'bed_type' => 'Kingsize',
            'hotel_id' => 1,
            'user_id' => 1
        ]);

        \App\Room::create([
            'title' => 'Presidential Suite',
            'description' => '',
            'capacity' => '2 - 4',
            'area' => 100,
            'bed_type' => 'Kingsize',
            'hotel_id' => 1,
            'user_id' => 1
        ]);
    }
}
