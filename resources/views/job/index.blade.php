<div>
    <h1>Job Board</h1>
    @foreach ($jobs as $job)
    <div>{{ $job['title'] }}: {{ $job['salary'] }} </div>
    @endforeach
    <h2>my name is: {{ $name }}</h2>
</div>