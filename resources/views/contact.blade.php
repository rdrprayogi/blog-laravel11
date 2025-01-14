<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nama</label>
            <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-md p-2 mt-1" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md p-2 mt-1" required>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700">Pesan</label>
            <textarea id="message" name="message" class="w-full border border-gray-300 rounded-md p-2 mt-1" rows="4" required></textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="bg-blue-500 text-white rounded-md p-2">Kirim</button>
        </div>
    </form>
</div>

</x-layout>
