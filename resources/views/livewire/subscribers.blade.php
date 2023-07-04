<div class="p-6 text-gray-900 dark:text-gray-100">
    <p class="text-2l text-gray-600 font-bold mb-6 underline">Subscribers</p>
    @if ($subscribers->isEmpty())
        <div class="flex w-full bg-red-100 p-5 rounded-lg">
            <p class="text-red-400">No subsrcibers found</p>
        </div>
    @else
        <table class="w-full">
            <thead class="border-b-2 border-gray-300 text-indigo-600">
                <tr>
                    <th class="px-6 py-3 text-left">#</th>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Verified</th>
                    <th class="px-6 py-3 text-left"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($subscribers as $subscriber)
                    <tr class="text-sm text-indigo-900 border-b border-gray-400">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $subscriber->email }}</td>
                        <td class="px-6 py-4">{{ optional($subscriber->email_verified_at)->diffForHumans() ?? 'Never' }}</td>
                        <td class="px-6 py-4">
                            <button class="rounded px-2 border border-red-500 text-red-500 bg-red-50 hover:background-red-100">
                                DELETE
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
