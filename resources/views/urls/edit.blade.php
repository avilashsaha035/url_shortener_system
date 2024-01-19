<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('urls.update', $url) }}">
            @csrf
            @method('patch')
            <input type="text" name="name" required maxlength="255" placeholder="{{ __('Name') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                value="{{ old('name', $url->name) }}"
            />
            <x-input-error :messages="$errors->store->get('name')" class="mt-2" />
            <input type="text" name="original_url" required maxlength="255" placeholder="{{ __('Original Url') }}"
                class="block w-full border-gray-300 mt-5 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                value="{{ old('original_url', $url->original_url) }}"
            />
            <x-input-error :messages="$errors->store->get('original_url')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('urls.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
