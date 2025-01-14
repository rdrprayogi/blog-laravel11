<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

<form method="GET" action="{{ route('blog') }}" class="mb-4">
    <input type="text" name="search" placeholder="Search blog titles..." class="border border-gray-300 rounded-md p-2 w-full md:w-1/2">
    <button type="submit" class="bg-blue-500 text-white rounded-md p-2 mt-2 md:mt-0 md:ml-2">Search</button>
</form>

<article>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @if($blogs->isEmpty())
                <p class="text-red-500">
                    {{ $search ? "Title '$search' tidak ditemukan." : "Belum ada blog yang tersedia." }}
                </p>
    @else
        @foreach($blogs as $blog)
            <div class="border-b border-gray-200 pb-4">
                <h2 class="text-2xl font-bold text-gray-900">{{ $blog->tittle }}</h2>
                <p class="text-gray-700 mt-2">{{ $blog->description }}</p>
                <a href="{{ route('blog', $blog->id) }}" class="text-blue-500 hover:underline mt-2 inline-block">Read More</a>
            </div>
        @endforeach
    @endif
</div>


</article>
{{ $blogs->links() }}
</x-layout>
