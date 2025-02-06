<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Detail Laporan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between align-items-center">
                    <!-- kiri  judul-->
                    <div>
                        <div class="px-6 mt-6 text-gray-900 text-lg font-semibold dark:text-gray-100">
                            {{ $data->judul_laporan }}
                        </div>
                        <div class="px-6 mb-6 mt-2  text-gray-900 text-sm font-semibold dark:text-gray-100">
                            Detail laporan {{ $data->judul_laporan }} dan progress tinjauannya.
                        </div>
                    </div>
                    <!-- sebelah kanan -->
                    <div class="px-6 py-6">
                        @if ($data->status == 'pending')
                        <span class="bg-gray-400 text-white rounded-md py-2 px-4 flex gap-4">
                            <i data-feather="clock"></i>
                            Pending
                        </span>
                        @elseif($data->status == 'diproses')
                        <span class="bg-green-700 text-white rounded-md py-2 px-4 flex gap-4">
                            <i data-feather="clock"></i>
                            Diproses
                        </span>
                        @elseif($data->status == 'selesai')
                        <span class="bg-green-800 text-white rounded-md py-2 px-4 flex gap-4">
                            <i data-feather="clock"></i>
                            Selesai
                        </span>
                        @else
                        <span class="bg-red-800 text-white rounded-md py-2 px-4 flex gap-4">
                            <i data-feather="clock"></i>
                            Ditolak
                        </span>
                        @endif
                    </div>
                </div>
                <!-- <div class="flex justify-between"> -->
                <div class="px-6 mb-3 mt-4  text-gray-900 text-sm font-semibold dark:text-gray-100">
                    {{ $data->deskripsi }}
                </div>
                <div class="px-6 mb-3">
                    <img src="{{asset('storage/images/laporan/'.$data->dokumentasi)}}" class="h-25" alt="Bukti Laporan">
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</x-app-layout>