<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.information.update', $info->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $info->name)" />
                        </div>
                        <div>
                            <x-input-label for="job_title" :value="__('Job Title')" />
                            <x-text-input id="job_title" name="job_title" type="text" class="mt-1 block w-full" :value="old('job_title', $info->job_title)" />
                        </div>
                        <div class="md:col-span-2">
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('description', $info->description) }}</textarea>
                        </div>
                        <div>
                            <x-input-label for="birth_date" :value="__('Birth Date')" />
                            <x-text-input id="birth_date" name="birth_date" type="text" class="mt-1 block w-full" :value="old('birth_date', $info->birth_date)" />
                        </div>
                        <div>
                            <x-input-label for="address" :value="__('Address')" />
                            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $info->address)" />
                        </div>
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $info->email)" />
                        </div>
                        <div>
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $info->phone)" />
                        </div>
                        <div>
                            <x-input-label for="website" :value="__('Website')" />
                            <x-text-input id="website" name="website" type="text" class="mt-1 block w-full" :value="old('website', $info->website)" />
                        </div>
                        <div>
                            <x-input-label for="projects_completed" :value="__('Projects Completed')" />
                            <x-text-input id="projects_completed" name="projects_completed" type="number" class="mt-1 block w-full" :value="old('projects_completed', $info->projects_completed)" />
                        </div>
                        <div>
                            <x-input-label for="hero_image" :value="__('Hero Image')" />
                            <input id="hero_image" name="hero_image" type="file" class="mt-1 block w-full" />
                        </div>
                        <div>
                            <x-input-label for="about_image" :value="__('About Image')" />
                            <input id="about_image" name="about_image" type="file" class="mt-1 block w-full" />
                        </div>
                        <div>
                            <x-input-label for="cv_link" :value="__('CV File')" />
                            <input id="cv_link" name="cv_link" type="file" class="mt-1 block w-full" />
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
