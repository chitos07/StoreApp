<x-app>


    @section('content')

            <div class="text-right mr-3 mt-3">

                 <h3 class="btn btn-primary">تعديل بيانات القسم</h3>

            </div>

     <div class="m-2">
     <form method="POST" action="{{ route('expenses.store') }}">
            @csrf

            <div class="row">
              <div class="col-5">
                <input
                name="ExpensesName"
                type="text"
                 class="form-control"
                 placeholder="اسم المصروف"

                 >
              </div>

             
                <div class="col-5">
                  <input
                  name="ExpensesValue"
                  type="text"
                   class="form-control"
                   placeholder="قيمة المصروف"
  
                   >

                   
                </div>
                <button type="submit" class="btn btn-primary ">حفظ</button>
            </div>
            
           
            </div>

          
          </form>



     </div>

    @endsection




</x-app>
