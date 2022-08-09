
@include('blashboard-ui::components.tables.parts.template')


<script>

    let core = {!! json_encode($config['core']) !!};

    if( core == 'datatable'){
                
        let id = {!! json_encode(isset($id) ? $id : '') !!};
        let table = new DataTable('#'+id, {
            paging: false,
            info: false,
        });

        document.getElementById('Search_'+id).addEventListener('keyup', function(e) {
            table.search($(this).val()).draw() ;
        }); 

    }

            

        
</script>

<style>
    .dataTables_wrapper .dataTables_filter {
        float: right;
        text-align: right;
        visibility: hidden;
        display: none;
    }
</style>