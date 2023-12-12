<div>
    @if(count($locations) > 0)
        <ul>
            @foreach ($locations as $location)
                <li>{{ ucfirst($location->name) }} <div class="tag tag--primary">{{ $location->occurance }}</div></li>
            @endforeach
        </ul>
    @else
        <div class="toast m-0">
            <p>No location found..</p>
        </div>
    @endif
</div>
