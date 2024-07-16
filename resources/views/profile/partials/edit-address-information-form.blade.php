<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Address') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Update your account\'s address information.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.add-address') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div>
            <x-input-label for="update_address_state" :value="__('State')" />
            <x-text-input id="update_address_state" name="state" type="text" class="mt-1 block w-full" :value="old('state', $user->profile->state ?? '')" required autocomplete="address-level1" />
            <x-input-error :messages="$errors->updateAddress->get('state')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_address_city" :value="__('City')" />
            <x-text-input id="update_address_city" name="city" type="text" class="mt-1 block w-full" :value="old('city', $user->profile->city ?? '')" required autocomplete="address-level2" />
            <x-input-error :messages="$errors->updateAddress->get('city')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_address_street" :value="__('Street')" />
            <x-text-input id="update_address_street" name="street" type="text" class="mt-1 block w-full" :value="old('street', $user->profile->street ?? '')" required autocomplete="street-address" />
            <x-input-error :messages="$errors->updateAddress->get('street')" class="mt-2" />
        </div>


        <div>
            <x-input-label for="update_address_postal_code" :value="__('Postal Code')" />
            <x-text-input id="update_address_postal_code" name="postal_code" type="text" class="mt-1 block w-full" :value="old('postal_code', $user->profile->postal_code ?? '')" required autocomplete="postal-code" />
            <x-input-error :messages="$errors->updateAddress->get('postal_code')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'address-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
