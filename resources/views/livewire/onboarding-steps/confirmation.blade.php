<h5 class="text-center mb-4">
    <span class="badge bg-primary">{{ __('registration.steps.confirmation') }}</span>
</h5>

<div class="card mb-4">
    <div class="card-header bg-light">
        <h6 class="mb-0"><i class="bi bi-person-circle"></i> {{ __('registration.confirmation.user_info') }}</h6>
    </div>
    <div class="card-body">
        <p><strong>{{ __('registration.fields.name') }}:</strong> <span class="badge bg-secondary">{{ $name }}</span></p>
        <p><strong>{{ __('registration.fields.email') }}:</strong> <span class="badge bg-secondary">{{ $email }}</span></p>
        <p><strong>{{ __('registration.fields.phone') }}:</strong> <span class="badge bg-secondary">{{ $phone }}</span></p>
        <p><strong>{{ __('registration.fields.subscription_type') }}:</strong>
            <span class="badge {{ $subscriptionType === 'Premium' ? 'bg-success' : 'bg-info' }}">
                {{ $subscriptionType }}
            </span>
        </p>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header bg-light">
        <h6 class="mb-0"><i class="bi bi-geo-alt-fill"></i> {{ __('registration.confirmation.address_info') }}</h6>
    </div>
    <div class="card-body">
        <p><strong>{{ __('registration.fields.address_line1') }}:</strong> <span class="badge bg-secondary">{{ $addressLine1 }}</span></p>
        <p><strong>{{ __('registration.fields.address_line2') }}:</strong> <span class="badge bg-secondary">{{ $addressLine2 }}</span></p>
        <p><strong>{{ __('registration.fields.city') }}:</strong> <span class="badge bg-secondary">{{ $city }}</span></p>
        <p><strong>{{ __('registration.fields.postal_code') }}:</strong> <span class="badge bg-secondary">{{ $postalCode }}</span></p>
        <p><strong>{{ __('registration.fields.state') }}:</strong> <span class="badge bg-secondary">{{ $state }}</span></p>
        <p><strong>{{ __('registration.fields.country') }}:</strong> <span class="badge bg-secondary">{{ $country }}</span></p>
    </div>
</div>

@if ($subscriptionType === 'Premium')
    <div class="card mb-4">
        <div class="card-header bg-light">
            <h6 class="mb-0"><i class="bi bi-credit-card"></i> {{ __('registration.confirmation.payment_info') }}</h6>
        </div>
        <div class="card-body">
            <p><strong>{{ __('registration.fields.credit_card_number') }}:</strong>
                <span class="badge bg-secondary">**** **** **** {{ substr($creditCardNumber, -4) }}</span>
            </p>
            <p><strong>{{ __('registration.fields.expiration_date') }}:</strong>
                <span class="badge bg-secondary">{{ $expirationDate }}</span>
            </p>
            <p><strong>{{ __('registration.fields.cvv') }}:</strong>
                <span class="badge bg-secondary">{{ $cvv }}</span>
            </p>
        </div>
    </div>
@endif

<div class="text-center mt-4">
    <button type="button" wire:click="previousStep" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left-circle"></i> {{ __('registration.buttons.back') }}
    </button>
    <button type="button" wire:click="submit" class="btn btn-success">
        <i class="bi bi-check-circle"></i> {{ __('registration.buttons.submit') }}
    </button>
</div>
