<x-app>


    @section('content')


            <div class="bg-dark text-light mr-1 p-2">

            <a class="btn btn-primary" href="{{route('procat_create')}}" role="button">اضافة قسم جديد</a>

            </div>


                <div class="mt-1 ">
            <table class="table text-right" >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">اسم القسم</th>
                    <th scope="col">التحكم</th>

                  </tr>
                </thead>
                <tbody>

                    @forelse ($ProductCat as $procat)
                    <tr>

                        <td>{{$procat->categorieName}}</td>
                        <td class="float-left">
                        <a href="{{ route('procat_edit' , $procat->id)}}"><i class="fa fa-edit"></i></a>
                        <a href="{{route('procat_delete' ,$procat->id )}}" onclick="if(!confirm('هل تريد حذف القسم')) return false;"><i class="fa fa-trash"></i></a>
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



