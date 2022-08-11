
@include('blashboard-ui::components.tables.datatable.parts.template')


<script>

    console.log(data);
                
        let id = {!! json_encode(isset($id) ? $id : '') !!};
        let table = new DataTable('#'+id, {
            paging: false,
            info: false,
            data: data,
            columns: colums
        });

        document.getElementById('Search_'+id).addEventListener('keyup', function(e) {
            table.search($(this).val()).draw() ;
        }); 

            

        
</script>

<style>
    .dataTables_wrapper .dataTables_filter {
        float: right;
        text-align: right;
        visibility: hidden;
        display: none;
    }
    .btn-primary{
        padding: 2px 5px;
        background: red;
        color: #fff;
    }
</style>