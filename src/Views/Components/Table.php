<?php

namespace Jcgdev\BlashboardUi\Views\Components;
use Illuminate\View\Component;


class Table extends Component
{

        /**
     * The alert id.
     *
     * @var string
     */
    public $id;

    /**
     * The alert type.
     *
     * @var string
     */
    public $type;
 
    /**
     * The alert values.
     *
     * @var string
     */
    public $values;
 
    /**
     * The alert config.
     *
     * @var string
     */
    public $config;

    /**
     * Create the component instance.
     *
     * @param  string  $id
     * @param  string  $type
     * @param  string  $values
     * @param  string  $config
     * @return void
     */
    public function __construct($id, $type, $values, $config)
    {
        
        $this->id = $id;
        $this->type = $type;
        $this->values = $values;
        $this->config = $config;
    }
 
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {

        if(isset($this->config['actions'])){}else{
            $this->config['actions'] = false;
        }

        return view('blashboard-ui::components.tables.table');
    }

}
