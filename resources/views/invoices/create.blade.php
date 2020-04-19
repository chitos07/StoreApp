<x-app>

    @section('content')


    <form method="POST" action="{{ route('sales.store' )}}">
      @csrf
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12">
          <table class="table table-bordered table-hover" id="tab_logic">
            <thead>
              <tr>
                <th class="text-center"> # </th>
                <th class="text-center"> الكمية </th>
                <th class="text-center"> المنتج </th>
                <th class="text-center"> الحجم </th>
                <th class="text-center"> السعر </th>
              </tr>
            </thead>
            <tbody>
              <tr id='addr0'>
                <td>1</td>
                <td><input type="number" name='Qunitiy[]' placeholder='الكمية' class="form-control qty" step="0" min="0"/></td>
                <td>    
                  <select class=" col form-control mb-2" name="Product_id[]">
                    @foreach ($Product as $Products)
               <option value="{{ $Products->id}}"> {{$Products->productName}}  </option>
                    @endforeach
                </td>
                <td>
                  <select class=" col form-control mb-2" name="packages_id[]">
                    @foreach ($Packges as $Packge)
               <option value="{{ $Packge->id}}"> {{$Packge->size}}  </option>
                    @endforeach
               
               </select>
                </td>
                <td><input type="number" name='price[]' placeholder='السعر' class="form-control total" /></td>
              </tr>
              <tr id='addr1'></tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row clearfix">
        <div class="col-md-12">
          <button  type="button"    id="add_row" class="btn btn-primary float-left">Add Row</button>
          <button type="button"  id='delete_row' class="float-right btn btn-danger">Delete Row</button>
        </div>
      </div>

   

    <button type="submit" class="btn btn-primary mt-3 mr-2 float-right ">حفظ</button>
  </form>

</div>   
    
           


                 
               
                 
        @endsection
        @section('javascript')
        <script type="text/javascript">
                   $(document).ready(function(){
     var i=1;
     $("#add_row").click(function(){b=i-1;
         $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
         $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
         i++; 
     });
     $("#delete_row").click(function(){
       if(i>1){
     $("#addr"+(i-1)).html('');
     i--;
     }
     calc();
   });
   
   $('#tab_logic tbody').on('keyup change',function(){
     calc();
   });
   $('#tax').on('keyup change',function(){
     calc_total();
   });
   
 
 });


     </script>
      
     @endsection
</x-app>