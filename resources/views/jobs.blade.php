<x-layout>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    {{ $job['title'] }}: Pays {{ $job['salary'] }} a year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
