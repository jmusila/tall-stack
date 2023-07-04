<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-2l text-gray-600 font-bold mb-6 underline">Subscribers</p>
                    @if ($subscribers->isEmpty())
                        <div class="flex w-full bg-red-100 p-5 rounded-lg">
                            <p class="text-red-400">No subsrcibers found</p>
                        </div>
                    @else
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Verified</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subscribers as $subscriber)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $subscriber->email }}</td>
                                        <td>{{ optional($subscriber->email_verified_at)->diffForHumans() ?? 'Never' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
