<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\BusinessMailingAddress;
use App\Models\Enquiry;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personal = User::create([
            'firstname' => 'Personal',
            'lastname' => 'User',
            'email' => 'personal@example.com',
            'mobile' => '9999999991',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'email_verified_at' => Carbon::now(),
        ]);

        $personal->assignRole('Personal');

        $address = new BusinessMailingAddress;
        $address->address_1 = "4891 Isaacs Creek Road";
        $address->address_2 = "Street 9 , Last Block";
        $address->city      = "Danville";
        $address->state     = "Illinois";
        $address->zipcode   = "61832";
        $address->country   = "United Kingdom";

        $personal->mailingAddress()->save($address);

        $enquiryOne = new Enquiry;
        $enquiryOne->user_id = $personal->id;
        $enquiryOne->product_type = "HT Panels";
        $enquiryOne->pti_no      = "43210";
        $enquiryOne->job_no     = "01234";
        $enquiryOne->panel_name   = "Panel A";
        $enquiryOne->construction_type   = "Indoor";
        $enquiryOne->rating   = "5";
        $enquiryOne->customer_details   = "United Kingdom";
        $enquiryOne->save();

        $enquiryTwo = new Enquiry;
        $enquiryTwo->user_id = $personal->id;
        $enquiryTwo->product_type = "LT Panels";
        $enquiryTwo->pti_no      = "54320";
        $enquiryTwo->job_no     = "02345";
        $enquiryTwo->panel_name   = "Panel B";
        $enquiryTwo->construction_type   = "Outdoor";
        $enquiryTwo->rating   = "3.5";
        $enquiryTwo->customer_details   = "N2R Technologies";
        $enquiryTwo->save();

    }
}
