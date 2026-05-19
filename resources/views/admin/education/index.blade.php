<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Education') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">
                <h3 class="text-lg font-medium mb-4">Add New Education</h3>
                <form action="{{ route('admin.education.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="duration" :value="__('Duration (e.g. 2014-2015)')" />
                            <x-text-input id="duration" name="duration" type="text" class="mt-1 block w-full" required />
                        </div>
                        <div>
                            <x-input-label for="degree" :value="__('Degree')" />
                            <x-text-input id="degree" name="degree" type="text" class="mt-1 block w-full" required />
                        </div>
                        <div>
                            <x-input-label for="institution" :value="__('Institution')" />
                            <x-text-input id="institution" name="institution" type="text" class="mt-1 block w-full" required />
                        </div>
                        <div class="md:col-span-2">
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                        </div>
                    </div>
                    <div class="mt-4">
                        <x-primary-button>{{ __('Add Education') }}</x-primary-button>
                    </div>
                </form>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium mb-4">Existing Education</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Duration</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Degree</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Institution</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($educations as $education)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $education->duration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $education->degree }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $education->institution }}</td>
                            <td class="px-6 py-4 whitespace-nowrap flex space-x-2">
                                <form action="{{ route('admin.education.destroy', $education->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
