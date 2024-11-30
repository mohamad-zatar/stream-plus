<h5>{{ __('registration.steps.user_info') }}</h5>
<form wire:submit.prevent="nextStep">
    <div class="mb-3">
        <label for="name" class="form-label">{{ __('registration.fields.name') }}</label>
        <input type="text" id="name" wire:model.blur="name" class="form-control">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">{{ __('registration.fields.email') }}</label>
        <input type="email" id="email" wire:model.live="email" class="form-control">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">{{ __('registration.fields.phone') }}</label>
        <input type="text" id="phone" wire:model.blur="phone" class="form-control">
        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('registration.fields.subscription_type') }}</label>
        <div>
            <div class="form-check">
                <input type="radio" id="free" wire:model="subscriptionType" value="Free" class="form-check-input">
                <label for="free" class="form-check-label">{{ __('registration.options.free') }}</label>
            </div>
            <div class="form-check">
                <input type="radio" id="premium" wire:model="subscriptionType" value="Premium" class="form-check-input">
                <label for="premium" class="form-check-label">{{ __('registration.options.premium') }}</label>
            </div>
        </div>
        @error('subscriptionType') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-primary">{{ __('registration.buttons.next') }}</button>
</form>
