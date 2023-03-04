<ul>
    @foreach ($data as $item)
        <li class="mt-1" data-jstree='{ "opened" : true, "icon" : "icon ni ni-user-fill text-primary" }'> {{ $item['name'] }}
            @if (!empty($item['children']))
                @include('feature.tree.children', ['data' => $item['children']])
            @endif
        </li>
    @endforeach
</ul>
