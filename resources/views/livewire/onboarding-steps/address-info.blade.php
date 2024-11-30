<h5>{{ __('registration.steps.address_info') }}</h5>
<form wire:submit.prevent="nextStep">
    <div class="mb-3">
        <label for="country" class="form-label">{{__('registration.fields.country')}}</label>
        <select id="country" wire:model.live="country" class="form-control">
            <option value="" selected="true" disabled>Select</option>
            <option value="UK">UK</option>
            <option value="AE">UAE</option>
        </select>
        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="state" class="form-label">{{__('registration.fields.state')}}</label>
        <input type="text" id="state" wire:model.live="state" class="form-control">
        @error('state') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="addressLine1" class="form-label">{{ __('registration.fields.address_line1') }}</label>
        <input type="text" id="addressLine1" wire:model.blur="addressLine1" class="form-control">
        @error('addressLine1') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">{{__('registration.fields.city')}}</label>
        <input type="text" id="city" wire:model.blur="city" class="form-control">
        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="addressLine2" class="form-label">{{__('registration.fields.address_line2')}}</label>
        <input type="text" id="addressLine2" wire:model="addressLine2" class="form-control">
    </div>
    @if ($country !== 'AE')
    <div class="mb-3">
        <label for="postalCode" class="form-label">{{__('registration.fields.postal_code')}}</label>
        <input type="text" id="postalCode" wire:model.blur="postalCode" class="form-control">
        @error('postalCode') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    @endif

    <button type="button" wire:click="previousStep" class="btn btn-secondary">{{ __('registration.buttons.back') }}</button>
    <button type="submit" class="btn btn-primary">{{ __('registration.buttons.next') }}</button>
</form>
