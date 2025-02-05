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
                            Buat Laporan
                        </div>
                        <div class="px-6 mb-6 mt-2  text-gray-900 text-sm font-semibold dark:text-gray-100">
                            Form membuat laporan baru
                        </div>
                    </div>
                </div>

                <!-- form area -->

                <form action="{{route('laporan.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-10 grid grid-cols-6 gap-x-6 gap-y-8 sm:grid-cols-1 p-6">
                        <div class="sm:col-span-3 mt-2">
                            <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Judul Laporan</label>
                            <div class="mt-2">
                                <input type="text" name="judul_laporan" required autocomplete="given-name" class="block w-full rounded-md dark:bg-gray-800 dark:text-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                        <div class="mt-2 border dark:border-gray-100 border-bg-gray-700  rounded-md flex justify-between py-6 px-6">
                            <div>
                                <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Dokumentasi</label>
                            </div>
                            <div class="mt-2">
                                <input type="file" name="dokumentasi" required autocomplete="given-name" class="block w-full rounded-md dark:bg-gray-800 dark:text-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                        <div class="sm:col-span-3 mt-2">
                            <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Deskripsi Laporan</label>
                            <div class="mt-2">
                                <textarea name="deskripsi" required class="block w-full rounded-md dark:bg-gray-800 dark:text-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                            </div>
                        </div>
                        <div class="sm:col-span-3 mt-2">
                            <div class="mt-2">
                                <button type="submit" class="bg-red-600 rounded-md text-white hover:bg-red-800 py-2 px-4">Buat Laporan</button>
                                <a href="#" class="border border-red-600 rounded-md dark:text-white py-2 px-4">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>