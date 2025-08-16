<?php

namespace Database\Seeders;

use App\Models\Policy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $policies = [
            [
                'privacy_policy' => 'Your data is safe with us – we value your privacy above all.',
                'terms_conditions' => 'By using our services,you agree to our terms and conditions designed to protect both you and us.',
                'refund_policy' => 'Our refund policy ensures a fair and transparent process for all our customers.',
                'payment_policy' => 'Our payment policy ensures,timely, and hassle-free transactions.',
                'return_policy' => 'Our return policy ensures,timely, and hassle-free transactions.',
                'about_us' => 'We are dedicated to delivering quality and trust in every service we provide',

            ]
        ];

        Policy::insert($policies);
    }
}
