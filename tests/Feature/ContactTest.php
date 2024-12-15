<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_list_is_accessible()
    {
        $response = $this->get(route('contacts.index'));

        $response->assertStatus(200);
        $response->assertViewIs('contacts.index');
    }

    public function test_contact_can_be_created()
    {
        $data = [
            'name' => 'John Doe',
            'contact' => '123456789',
            'email' => 'john@example.com',
        ];

        $response = $this->post(route('contacts.store'), $data);

        $response->assertStatus(302);
        $this->assertDatabaseHas('contacts', $data);
    }

    public function test_contact_can_be_updated()
    {
        $contact = Contact::factory()->create();

        $data = [
            'name' => 'Jane Doe',
            'contact' => '987654321',
            'email' => 'jane@example.com',
        ];

        $response = $this->put(route('contacts.update', $contact->id), $data);

        $response->assertStatus(302);
        $this->assertDatabaseHas('contacts', $data);
    }

    public function test_contact_can_be_deleted()
    {
        $contact = Contact::factory()->create();

        $response = $this->delete(route('contacts.destroy', $contact->id));

        $response->assertStatus(302);
        $this->assertSoftDeleted('contacts', ['id' => $contact->id]);
    }
}
