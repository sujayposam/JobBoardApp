<h2>
    {{ $job->title }}
</h2>

<p>
    Job is Live on apps
</p>

<p>
    <a href='{{ url('/jobs/' . $job->id) }}'>View Job</a>
</p>
