<x-app>


    @section('content')


            <div class="bg-dark text-light mr-1 p-2">

            <a class="btn btn-primary" href="{{route('expenses.create')}}" role="button">اضافة مصروف جديد</a>

            </div>


                <div class="mt-1 ">
            <table class="table text-right" >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">اسم المصروف</th>
                    <th scope="col">قيمة المصروف</th>
                    

                    <th scope="col">التحكم</th>

                  </tr>
                </thead>
                <tbody>

                    @forelse ($Expenses  as $Expense)
                    <tr>

                        <td>{{ $Expense->ExpensesName}}</td>
                        <td>{{ $Expense->ExpensesValue}}</td>
                       
                        <td class="float-left">
                        <a href="{{ route('expenses.edit' , $Expense->id)}}"><i class="fa fa-edit"></i></a>
                        <a href="{{route('expenses.delete' ,$Expense->id )}}" onclick="if(!confirm('هل تريد حذف القسم')) return false;"><i class="fa fa-trash"></i></a>
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



