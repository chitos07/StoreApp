<x-app>


    @section('content')


            <div class="bg-dark text-light mr-1 p-2">

            <a class="btn btn-primary" href="register" role="button">اضافة مستخدم جديد </a>

            </div>


                <div class="mt-1 ">
            <table class="table text-right" >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">اسم المستخدم</th>
                    <th scope="col">الاميل</th>
                    <th scope="col">وقت التسجيل</th>
               

                  </tr>
                </thead>
                <tbody>

                    @forelse ($user as $users)
                    <tr>

                        <td>{{ $users->name}}</td>
                        <td>{{ $users->email}}</td>
                        <td>{{ $users->created_at }}</td>
                       
                       
                      </tr>

                      @empty
                        <td  class="text-center">No Data</td>
                    @endforelse



                </tbody>
              </table>


                </div>

    @endsection


</x-app>



