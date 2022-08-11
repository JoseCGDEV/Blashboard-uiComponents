<thead class="">
    <tr>

        @foreach ($config['heads'] as $head)
            <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                {{$head}}
            </th>
        @endforeach

        @if ($config['actions'] !== false)
            <th 
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
            >
                Actions
            </th>
        @endif
        
    </tr>
</thead>


