<h5>{{ __('registration.steps.payment_info') }}</h5>
<form wire:submit.prevent="nextStep">
    <div class="mb-3">
        <label for="creditCardNumber" class="form-label">{{ __('registration.fields.credit_card_number') }}</label>
        <input type="text" id="creditCardNumber" wire:model.live="creditCardNumber" class="form-control">
        @error('creditCardNumber') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="expirationDate" class="form-label">{{ __('registration.fields.expiration_date') }}</label>
        <input type="text" id="expirationDate" wire:model.live="expirationDate" class="form-control" placeholder="MM/YY" maxlength="5">
        @error('expirationDate') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="cvv" class="form-label">{{ __('registration.fields.cvv') }}</label>
        <input type="text" id="cvv" wire:model.live="cvv" class="form-control">
        @error('cvv') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <button type="button" wire:click="previousStep" class="btn btn-secondary">{{ __('registration.buttons.back') }}</button>
    <button type="submit" class="btn btn-primary">{{ __('registration.buttons.submit') }}</button>
</form>
