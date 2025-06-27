<div>
    <h1>Job Listings</h1>
    <h2>my name is {{ $name }}</h2>
</div>

@foreach ($jobs as $job)
    <div>{{ $job['title'] }} : {{ $job['salary'] }}</div>
@endforeach
