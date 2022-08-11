@php $key = $config['key'] != '' ? $config['key'] : $config['key'] = 'id'; @endphp

@switch($action)
    @case('edit')
        <a href="{{ url()->current().'/'.$value->$key}}" type="button" class="py-2 px-3 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Editar
        </a>
        @break
    @case('delete')
        <a href="{{ url()->current().'/'.$value->$key}}" type="button" class="py-2 px-3 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            Eliminar
        </a>
        @break
    @default
        
@endswitch

