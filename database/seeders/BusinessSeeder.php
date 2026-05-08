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
                'name' => 'Penwortham Plumbing',
                'domain' => 'penworthamplumbing.co.uk',
                'email' => 'dave@penworthamplumbing.co.uk',
                'phone' => '07700 900123',
                'notes' => 'Local plumber, wants a simple 3-page site with a contact form.',
            ],
            [
                'name' => 'The Fleece Inn',
                'domain' => 'thefleeceinn.co.uk',
                'email' => 'info@thefleeceinn.co.uk',
                'phone' => '01772 750321',
                'notes' => 'Country pub in Penwortham. Needs menus, events calendar, and booking widget.',
            ],
            [
                'name' => 'Ribble Valley Joinery',
                'domain' => 'ribblevalleyjoinery.co.uk',
                'email' => 'mark@rvjoinery.co.uk',
                'phone' => '07515 443210',
                'notes' => 'Bespoke kitchen and furniture maker. Photo gallery is a priority.',
            ],
            [
                'name' => 'Bright Sparks Tutoring',
                'domain' => 'brightsparkstutoring.co.uk',
                'email' => 'hello@brightsparkstutoring.co.uk',
                'phone' => '07890 112233',
                'notes' => 'Maths and English tutoring for primary school children.',
            ],
            [
                'name' => 'Preston Dog Walkers',
                'domain' => null,
                'email' => 'sarah@prestondogwalkers.co.uk',
                'phone' => '07444 556677',
                'notes' => 'On hold — client moving house, will resume in a few months.',
            ],
            [
                'name' => 'Longton Flowers',
                'domain' => 'longtonflowers.co.uk',
                'email' => 'orders@longtonflowers.co.uk',
                'phone' => '01772 612345',
                'notes' => 'Closed the shop in March. May reopen online only.',
            ],
        ];

        foreach ($businesses as $business) {
            Business::create($business);
        }
    }
}
