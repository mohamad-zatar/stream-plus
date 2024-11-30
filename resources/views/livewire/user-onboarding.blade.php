<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0">{{ __('registration.step_x_of_y', ['current' => $step, 'count' => '4']) }}</h4>
        </div>
        <div class="card-body p-4">
            <!-- Progress Bar -->
            <div class="progress mb-4" style="height: 20px;">
                <div
                    class="progress-bar bg-success"
                    role="progressbar"
                    style="width: {{ ($step / 4) * 100 }}%;"
                    aria-valuenow="{{ $step }}"
                    aria-valuemin="0"
                    aria-valuemax="4">
                    {{ round(($step / 4) * 100) }}%
                </div>
            </div>

            <!-- Dynamic Content -->
            @if ($step === 1)
                @include('livewire.onboarding-steps.user-info')
            @elseif ($step === 2)
                @include('livewire.onboarding-steps.address-info')
            @elseif ($step === 3)
                @include('livewire.onboarding-steps.payment-info')
            @elseif ($step === 4)
                @include('livewire.onboarding-steps.confirmation')
            @endif
        </div>
        <div class="card-footer text-center bg-light">
            <small class="text-muted">{{ __('registration.footer_note') }}</small>
        </div>
    </div>
</div>
