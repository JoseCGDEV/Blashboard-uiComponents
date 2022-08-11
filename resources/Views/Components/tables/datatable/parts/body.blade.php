
<tbody>

    @include('blashboard-ui::components.tables.datatable.parts.actions')


    @php 
    
        $key = $config['key'] != '' ? $config['key'] : $config['key'] = 'id'; 


        function getMatches($array, $config){

            $matches = [];

            foreach ($config['heads'] as $column){

                if(isset($config['actions'][$column])){
        
                   if (is_array($config['actions'][$column]['evaluator'])) {

                        foreach ($config['actions'][$column]['evaluator'] as $evaluator) {
                            if( $evaluator == $array[$column]){
                                $matches[$column] = $config['actions'][$column]['element'];
                            }
                        }

                    }else{
                        if($config['actions'][$column]['evaluator'] == $array[$column]){
                            $matches[$column] = $config['actions'][$column]['element'];
                        }
                    }
                    
                }
                
            }

            return $matches;
            

        }



    @endphp
<!------------------------------------------------------------DATATABLE------------------------------------------------------------>

            @php 
            
                function getAction($matches, $config, $data, $row){

                    $key = $config['key'] != '' ? $config['key'] : $config['key'] = 'id'; 

                    $dom = '';
                    $i = 0;

                    foreach($matches as $match) { 
                        
                        switch ($match) {
                            case 'edit':
                                $dom = $dom.'<a href="'.url()->current().'/'.$data[$row][$key].'" type="button" class="btn-primary"> Editar '.$data[$row]['id'].' </a>';
                                break;
                            
                            case 'delete':
                                $dom = $dom.'<a href="'.url()->current().'/'.$data[$row][$key].'" type="button" class="btn-primary"> Eliminar '.$data[$row]['id'].' </a>';
                                break;
                            
                            default:
                                # code...
                                break;
                        }

                        $i++;

                    }

                    return $dom;

                }

            @endphp

            @php

                $data = $values->getCollection()->toArray();
                
                for ($i=0; $i < count($data) ; $i++) { 
                    
                    $data[$i]['actions'] = getAction(getMatches($data[$i], $config), $config, $data, $i);

                    echo json_encode(getMatches($data[$i], $config));

                }

            @endphp

            

            



            <script>
                var data = {!! json_encode($data) !!};
                var colums = [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'actions' }
                ];
            </script>

<!------------------------------------------------------------DATATABLE------------------------------------------------------------>

</tbody>


