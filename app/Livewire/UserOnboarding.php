<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class UserOnboarding extends Component
{
    public $step = 1;

    public $name;

    public $email;

    public $phone;

    public $subscriptionType;

    public $addressLine1;

    public $addressLine2;

    public $city;

    public $postalCode;

    public $state;

    public $country;

    public $creditCardNumber;

    public $expirationDate;

    public $cvv;

    protected array $rules = [
        // User Info Rules
        1 => [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|regex:/^[0-9]{10,}$/',
            'subscriptionType' => 'required|in:Free,Premium',
        ],
        // Address Rules
        2 => [
            'addressLine1' => 'required|string',
            'city' => 'required|string',
            'postalCode' => 'required_if:country,UK',
            'state' => 'required|string',
            'country' => 'required|string',
        ],
        // Payment Rules
        3 => [
            'creditCardNumber' => 'required|numeric|digits_between:13,16',
            'expirationDate' => 'required|date_format:m/y|after:today',
            'cvv' => 'required|numeric|digits:3',
        ],
    ];

    /**
     * @throws ValidationException
     */
    public function updated($propertyName): void
    {
        $currentRules = $this->rules[$this->step] ?? [];
        $this->validateOnly($propertyName, $currentRules);
    }

    public function nextStep(): void
    {
        $currentRules = $this->rules[$this->step] ?? [];
        $this->validate($currentRules);

        if ($this->step === 2 && $this->subscriptionType === 'Free') {
            $this->step = 4;
        } else {
            $this->step++;
        }
    }

    public function previousStep(): void
    {
        if ($this->step === 4 && $this->subscriptionType === 'Free') {
            $this->step = 2; // Skip to confirmation
        } else {
            $this->step--;
        }
    }

    public function submit()
    {
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subscription_type' => $this->subscriptionType,
        ]);
        $user->address()->create([
            'address_line1' => $this->addressLine1,
            'address_line2' => $this->addressLine2,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'postal_code' => $this->country !== 'ae' ? $this->postalCode : null,
        ]);
        if ($this->subscriptionType === 'Premium') {
            $user->payment()->create([
                'credit_card_last_four' => substr($this->creditCardNumber, -4),
                'expiration_date' => $this->expirationDate,
            ]);
        }

        return redirect()->route('registration.success')->with('success', __('registration.success'));
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.user-onboarding');
    }
}
