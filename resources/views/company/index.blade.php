<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    @if (session('success') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('success') }}
        </div>
    @endif
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <section>
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">Company name</th>
                  <th scope="col" class="px-6 py-3">NIP</th>
                  <th scope="col" class="px-6 py-3">Address</th>
                  <th scope="col" class="px-6 py-3">Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($companies as $company)
                  <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ $company->name }}
                    </th>
                    <td class="px-6 py-4">
                      {{ $company->nip }}
                    </td>
                    <td class="px-6 py-4">
                      {{ $company->address }}
                    </td>
                    <td class="px-6 py-4">
                      <a
                        href="{{ route('company.edit', $company->id) }}"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                      >
                        Edit
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </section>
      </div>
    </div>
  </div>
</x-app-layout>
