
<tbody>
   
<!------------------------------------------------------------DEFAULT------------------------------------------------------------>
            @php $row = 0; @endphp

            @foreach ($values as $value)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
        
        
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
                    
                    @php echo json_encode($actionsMatches); @endphp
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-900 whitespace-no-wrap">
                        @foreach ($actionsMatches as $action)
        
                            @include('blashboard-ui::components.tables.default.parts.actions')
                            
                        @endforeach
                    </td>
                    
                    
                </tr>
            @endforeach
<!------------------------------------------------------------END DEFAULT------------------------------------------------------------>

</tbody>

