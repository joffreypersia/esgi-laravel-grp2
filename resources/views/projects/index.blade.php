<x-layout>
    <h1>Bienvenue sur la page Projects</h1>
    <ul class="mt-4 list-disc list-inside">
        @foreach ($projects as $key => $project)
            <li><a href="{{ route('projects.show', $key) }}">{{ $project['title'] }}</a></li>
        @endforeach
    </ul>
</x-layout>
