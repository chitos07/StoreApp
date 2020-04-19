<x-app>


    @section('content')


    
    
            <div class="bg-dark text-light mr-1 p-2">

            <a class="btn btn-primary"  href="{{route('invoices.create')}}" role="button">اضافة فاتورة جديد</a>
          
            </div>


                <div class="mt-1 ">
            <table class="table text-right" >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">رقم الفاتورة</th>
                    <th scope="col">اجمالي المبيعات</th>
                    <th scope="col">اجمالي الفاتورة</th>
                    <th scope="col">مكسب الفاتورة</th>
                   

                    <th scope="col">التحكم</th>

                  </tr>
                </thead>
                <tbody>

                    @forelse ($invoices as $SalesInvoice)
                  
                    <tr>

                          <td>{{ $SalesInvoice->id}}</td>
                         <td> {{ $total = $SalesInvoice->Sales->count() }} منتج</td>   
                       <td>{{ $SalesInvoice->total_amount}}</td>
                        <td> {{ $SalesInvoice->take_money }} </td>
                  
                        <td class="float-left">
                        <a href="{{ route('invoices.show' , $SalesInvoice->id)}}"><i class="fa fa-edit"></i></a>
                        <a href="{{route('invoices.delete' ,$SalesInvoice->id )}}" onclick="if(!confirm('هل تريد حذف القسم')) return false;"><i class="fa fa-trash"></i></a>
                        </td>
                      <td></td>
                      </tr>

                      @empty
                        <td  class="text-center">No Data</td>

                      
                    @endforelse

                  

                </tbody>
              </table>


                </div>

    @endsection


</x-app>



