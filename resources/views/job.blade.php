<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>
    
    <h2 class="text-xl font-bold">{{ $job['title'] }}</h2>
    <p>{{ $job['company'] }}</p>
</x-layout>