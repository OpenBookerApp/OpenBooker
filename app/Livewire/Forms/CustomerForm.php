<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CustomerForm extends Form
{
    public ?Customer $customer = null;

    #[Validate('required')]
    public string $name = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required')]
    public string $phone = '';

    #[Validate('required')]
    public string $address = '';

    #[Validate('required')]
    public string $city = '';

    #[Validate('required')]
    public string $zip_code = '';

    #[Validate('required')]
    public string $country = '';

    #[Validate('required')]
    public string $language = '';

    #[Validate('required')]
    public string $timezone = '';

    #[Validate('required')]
    public string $notes = '';

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;

        $this->name = $customer->user->name;
        $this->email = $customer->user->email;
        $this->phone = $customer->phone;
        $this->address = $customer->address;
        $this->city = $customer->city;
        $this->zip_code = $customer->zip_code;
        $this->country = $customer->country;
        $this->language = $customer->language;
        $this->timezone = $customer->timezone;
        $this->notes = $customer->notes;
    }

    public function update(): void
    {
        $this->validate();

        $this->customer->update(
            $this->all()
        );

        $this->reset();
    }

    public function store(): void
    {
        $this->validate();

        Customer::create($this->all());

        $this->reset();
    }
}
