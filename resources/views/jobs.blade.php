<x-layout>
    <x-slot:heading>
       Jobs Listings
    </x-slot:heading>
   
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/"
                <strong>{{ $job['title'] }}:</strong> Pays {{$job['salary']}} per year.
            </li>    

        @endforeach
    </ul>
</x-layout>