<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        
        
        @include('blashboard-ui::components.tables.parts.search')

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full  rounded-lg overflow-hidden">


                <table class="min-w-full leading-normal" id="{{$id}}">
                    
                    @include('blashboard-ui::components.tables.parts.header')

                    @include('blashboard-ui::components.tables.parts.body')
                    
                </table>


            </div>
        </div>


        @include('blashboard-ui::components.tables.parts.pagination')
        

    </div>
</div>