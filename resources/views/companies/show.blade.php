Company: {{ $company->name }}

<br />

@if ($photo)
    <img src="{{ $photo }}" />
@else
    <p>No photo available</p>
@endif
