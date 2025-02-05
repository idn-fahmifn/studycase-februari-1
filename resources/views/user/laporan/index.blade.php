<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Laporan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between align-items-center">
                    <!-- kiri  judul-->
                    <div>
                        <div class="px-6 mt-6 text-gray-900 text-lg font-semibold dark:text-gray-100">
                            Laporan Saya
                        </div>
                        <div class="px-6 mb-6 mt-2  text-gray-900 text-sm font-semibold dark:text-gray-100">
                            Semua Laporan Saya
                        </div>
                    </div>
                    <!-- kanan  button-->
                    <div class="p-6">
                        <a href="#" class="bg-red-700 text-white hover:bg-red-800  px-4 py-2 rounded-md">Buat Laporan Baru</a>
                    </div>
                </div>
                <!-- area table -->
                <div class="overflow-x-auto p-6">
                    <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg">
                        <thead class="bg-gray-200 dark:bg-red-700">
                            <tr>
                                <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                    Judul Laporan
                                </th>
                                <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                    Dibuat
                                </th>
                                <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-700 dark:text-white uppercase tracking-wider">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">

                            @foreach ($data as $item)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                        {{ $item->judul_laporan }}
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $item->tanggal_laporan->diffForHumans() }}
                                    </td>
                                    <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $item->status }}
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    <div class="mt-4">
                        paginate
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>