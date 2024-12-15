<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Contact;

class ContactValidationTest extends TestCase
{
    public function test_name_validation()
    {
        $data = [
            'name' => 'John',
            'contact' => '123456789',
            'email' => 'john@example.com',
        ];

        $response = $this->post(route('contacts.store'), $data);

        $response->assertSessionHasErrors('name');
    }

    public function test_contact_validation()
    {
        $data = [
            'name' => 'John Doe',
            'contact' => '12345',
            'email' => 'john@example.com',
        ];

        $response = $this->post(route('contacts.store'), $data);

        $response->assertSessionHasErrors('contact');
    }

    public function test_email_validation()
    {
        $data = [
            'name' => 'John Doe',
            'contact' => '123456789',
            'email' => 'invalid-email',
        ];

        $response = $this->post(route('contacts.store'), $data);

        $response->assertSessionHasErrors('email');
    }
}
