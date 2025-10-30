<x-layout>
    <h1>{{ $project['title'] }}</h1>
    <ul class="mt-4 list-disc list-inside">
        @foreach ($projects as $project)
            <li>{{ $project['title'] }}</li>
        @endforeach
    </ul>
</x-layout>
