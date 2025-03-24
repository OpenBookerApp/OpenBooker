<?php

namespace App\Livewire\Forms;

use App\Models\Contact;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;
use Livewire\Form;

class ContactForm extends Form
{
    public ?Contact $contact = null;

    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $timezone = '';

    /**
     * @return array<string, list<Unique|string>>
     */
    protected function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('contacts', 'email')->ignore($this->contact),
            ],
            'phone' => [
                'nullable',
                'string',
                'max:255',
            ],
            'timezone' => [
                'nullable',
                'string',
                'max:255',
            ],
        ];
    }

    public function setContact(Contact $contact): void
    {
        $this->contact = $contact;

        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->phone = $contact->phone;
        $this->timezone = $contact->timezone;
    }

    public function update(): void
    {
        $this->validate();

        $this->contact->update(
            $this->all()
        );

        $this->reset();
    }

    public function store(): void
    {
        $this->validate();

        Contact::create($this->all());

        $this->reset();
    }
}
