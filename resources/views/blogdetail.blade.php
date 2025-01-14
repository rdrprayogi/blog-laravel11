<x-layout>
<x-slot:title>{{ $blog->tittle }}</x-slot:title>

<article class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-4">{{ $blog->tittle }}</h1>
    <p class="text-gray-700 mb-4">By {{ $blog->penulis }}</p>
    <p class="text-gray-700">{{ $blog->description }}</p>
</article>

<div class="max-w-4xl mx-auto mt-4">
    <a href="{{ url()->previous() }}" class="bg-blue-500 text-white rounded-md p-2">Kembali</a>
</div>

</x-layout>
