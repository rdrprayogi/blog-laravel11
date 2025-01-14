<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

<form method="GET" action="{{ route('about.index') }}" class="mb-4">
        <input type="text" name="search" placeholder="Search by author title..." class="border border-gray-300 rounded-md p-2 w-full md:w-1/2" value="{{ request('search') }}">
    <button type="submit" class="bg-blue-500 text-white rounded-md p-2 mt-2 md:mt-0 md:ml-2">Search</button>
</form>

@if($abouts->isEmpty())
            <p class="text-red-500">
                {{ $search ? "Title '$search' tidak ditemukan." : "Belum ada blog yang tersedia." }}
            </p>
@else
   <table class="min-w-full bg-white border border-gray-300">

            <thead>
                <tr>
                    <th class="py-2 px-4 border-b text-center">ID</th>
                    <th class="py-2 px-4 border-b text-center">Title</th>
                    <th class="py-2 px-4 border-b text-center">Penulis</th>
                </tr>
            </thead>
            <tbody>
                @foreach($abouts as $about)
                    <tr>
                        <td class="py-2 px-4 border-b text-center">{{ ($abouts->currentPage() - 1) * $abouts->perPage() + $loop->iteration}}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $about->tittle }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $about->penulis }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endif
{{ $abouts->links() }}
</x-layout>


