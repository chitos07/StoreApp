<x-app>


    @section('content')



   


     


                <div class="mt-1 ">
            <table class="table text-right" >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">الكمية</th>
                    <th scope="col">اسم المنتج</th>
                    <th scope="col">الحجم</th>
                    <th scope="col">السعر</th>
                 

                    <th scope="col">التحكم</th>

                  </tr>
                </thead>
                <tbody>

                    @forelse ($Sales as $sale)
                 
                    <tr>
                        
                        <td>{{ $sale->Qunitiy}}</td>
                        <td>{{ $sale->Product->productName}}</td>
                        <td>{{ $sale->Packages->size}}</td>
                        <td>{{$sale->price}}</td>
                     
                        <td class="float-left">
                        <a href="#"><i class="fa fa-edit"></i></a>
                        <a href="{{route('Sales.delete' ,$sale->id )}}" onclick="if(!confirm('هل تريد حذف القسم')) return false;"><i class="fa fa-trash"></i></a>
                        </td>

                      </tr>

                      @empty
                        <td  class="text-center">No Data</td>
                    @endforelse



                </tbody>
              </table>


                </div>

    @endsection


  
   
    
</x-app>



