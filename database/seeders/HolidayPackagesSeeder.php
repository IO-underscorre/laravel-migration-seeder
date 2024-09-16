<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HolidayPackage;
use Illuminate\Support\Str;

class HolidayPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv_file = fopen(__DIR__ . '/../data/holiday_packages.csv', 'r');

        $is_first_row = true;

        while (($row_data = fgetcsv($csv_file)) != false) {
            if (!$is_first_row) {
                $holiday_package = new HolidayPackage();
                $holiday_package->name = $row_data[0];
                $holiday_package->slug = $this->generateSlug($row_data[0]);
                $holiday_package->description = $row_data[1];
                $holiday_package->price = $row_data[2];
                $holiday_package->start_date = $row_data[3];
                $holiday_package->end_date = $row_data[4];
                $holiday_package->max_guests = $row_data[5];
                $holiday_package->is_valid = $row_data[6] ? true : false;

                $holiday_package->save();
            }

            $is_first_row = false;
        }
    }

    private function generateSlug($string)
    {
        $original_slug = Str::slug($string, '-');

        $same_original_slug_count = HolidayPackage::where('slug', 'LIKE', $original_slug . '%')->count();

        return $same_original_slug_count ? "{$original_slug}-{$same_original_slug_count}" : $original_slug;
    }
}
