<x-app>


    @section('content')


            <div class="bg-dark text-light mr-1 p-2">

            <a class="btn btn-primary" href="{{route('product_create')}}" role="button">اضافة منتج جديد</a>

            </div>


                <div class="mt-1 ">
            <table class="table text-right" >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">اسم المنتج</th>
                    <th scope="col">القسم التابع ليه</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">السعر</th>
                    <th scope="col">السعر بالوحده</th>

                    <th scope="col">التحكم</th>

                  </tr>
                </thead>
                <tbody>

                    @forelse ($product as $products)
                    <tr>

                        <td>{{ $products->productName}}</td>
                        <td>{{ $products->product_categories->categorieName}}</td>
                        <td>{{ $products->productQuantity }}</td>
                        <td>{{ $products->productPrice }}</td>
                        <td>{{ $products->unitPrice }}</td>
                        <td class="float-left">
                        <a href="{{ route('product_edit' , $products->id)}}"><i class="fa fa-edit"></i></a>
                        <a href="{{route('product_delete' ,$products->id )}}" onclick="if(!confirm('هل تريد حذف القسم')) return false;"><i class="fa fa-trash"></i></a>
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



