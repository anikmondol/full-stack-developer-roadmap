<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/contacts.json');

        $contacts = collect(json_decode($json, true)['data']);

        $contacts->each(function ($contact) {
            Contact::create([
                'email' => $contact['email'],
                'phone' => $contact['phone'],
                'address' => $contact['address'],
                'city' => $contact['city'],
                'student_id' => $contact['student_id'],
            ]);
        });
    }
}
