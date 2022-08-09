<tbody>

    @php $row = 0; @endphp

    @foreach ($values as $value)
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">

            <td class="w-4 p-4 px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-900 whitespace-no-wrap">
                <div class="flex items-center">
                    <input  id="checkbox-table-{{$value->id}}" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-table-{{$value->id}}" class="sr-only">checkbox</label>
                </div>
            </td>

            @php $actionsMatches = []; @endphp

            @foreach ($config['heads'] as $column)

                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-900 whitespace-no-wrap">
                    {{$value->$column}}
                </td>

                @php 
                
                    if(isset($config['actions'][$column])){

                        if (is_array($config['actions'][$column]['evaluator'])) {

                            foreach ($config['actions'][$column]['evaluator'] as $evaluator) {
                                if( $evaluator == $value->$column){
                                    $actionsMatches[$column] = $config['actions'][$column]['element'];
                                }
                            }

                        }else{
                            if($config['actions'][$column]['evaluator'] == $value->$column){
                                $actionsMatches[$column] = $config['actions'][$column]['element'];
                            }
                        }
                        
                    }else {
                        $actionsMatches[$column] = 'Columna sin evaluacion';
                    }

                    $row += 1;
                @endphp
                
                
            @endforeach
            
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-900 whitespace-no-wrap">
                @foreach ($actionsMatches as $action)

                    @include('blashboard-ui::components.tables.parts.actions')
                    
                @endforeach
            </td>
            
            
        </tr>
    @endforeach
    

</tbody>

