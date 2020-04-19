<x-app>


    @section('content')

    <div class="bg-dark text-light mr-1 p-2">

        <a class="btn btn-primary" href="{{route('Packages.create')}}" role="button">اضافة منتج جديد</a>

        </div>


            <div class="mt-1 ">
        <table class="table text-right" >
            <thead class="thead-light">
              <tr>
                <th scope="col">اسم المنتج</th>
                <th scope="col">الحجم</th>
                <th scope="col">الكمية</th>
                <th scope="col">السعر</th>
                <th scope="col">السعر بالوحده</th>

                <th scope="col">التحكم</th>

              </tr>
            </thead>
            <tbody>

                @forelse ($Packeges as $Packege)
                <tr>

                    <td>{{ $Packege->name}}</td>
                    <td>{{ $Packege->size}}</td>
                    <td>{{ $Packege->Qunitiy }}</td>
                    <td>{{ $Packege->price }}</td>
                    <td>{{ $Packege->Unit_Price }}</td>
                    <td class="float-left">
                    <a href="{{ route('Packages.edit' , $Packege->id)}}"><i class="fa fa-edit"></i></a>
                    <a href="{{route('Packages.delete' ,$Packege->id )}}" onclick="if(!confirm('هل تريد حذف القسم')) return false;"><i class="fa fa-trash"></i></a>
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