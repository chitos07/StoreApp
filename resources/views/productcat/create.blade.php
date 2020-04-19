<x-app>


    @section('content')

            <div class="text-right mr-3 mt-3">

                 <h3 class="btn btn-primary">تعديل بيانات القسم</h3>

            </div>

     <div class="m-2">
     <form method="POST" action="{{ route('procat_store') }}">
            @csrf

            <div class="form-row">
              <div class="col">
                <input
                name="categorieName"
                type="text"
                 class="form-control"
                 placeholder="اسم القسم"

                 >
              </div>

            </div>
            <button type="submit" class="btn btn-primary mt-3 ">حفظ</button>
          </form>



     </div>

    @endsection




</x-app>
