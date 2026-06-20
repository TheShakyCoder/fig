<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    public function run(): void
    {
        $businesses = [
            [
                'name' => 'Acme Accountants',
                'domain' => 'accountants.ddev.site',
            ],
            [
                'name' => 'The Fleece Inn',
                'domain' => 'thefleeceinn.co.uk',
            ],
            [
                'name' => 'Ribble Valley Joinery',
                'domain' => 'ribblevalleyjoinery.co.uk',
            ],
            [
                'name' => 'Bright Sparks Tutoring',
                'domain' => 'brightsparkstutoring.co.uk',
            ],
            [
                'name' => 'Preston Dog Walkers',
                'domain' => null,
            ],
            [
                'name' => 'Longton Flowers',
                'domain' => 'longtonflowers.co.uk',
            ],
        ];

        foreach ($businesses as $business) {
            Business::create($business);
        }
    }
}
