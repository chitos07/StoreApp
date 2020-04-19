<x-app>


    @section('content')

            <div class="text-right mr-3 mt-3">

                 <h3 class="btn btn-primary">تعديل بيانات القسم</h3>

            </div>

          <form method="POST" action="{{ route('Packages.store')}}">
              @csrf
              <div class="form-row ">
                <div class="col mb-2">
                  <input
                   type="text"
                   class="form-control" 
                   placeholder="اسم المنتج"
                   name="name"
                   value="زجاج"
                   >
                </div>
                
                <div class="col mb-2">
                  <input
                   type="text"
                   class="form-control" 
                   placeholder="الحجم"
                   name="size"
                   >
                </div>
              
                <div class="col mb-2">
                  <input 
                  type="text" 
                  class="form-control" 
                  placeholder="الكمية"
                  name="Qunitiy"
                  >
                </div>
                <div class="col mb-2">
                  <input 
                  type="text" 
                  class="form-control"
                  placeholder="السعر"
                  name="price" 
                   >
                </div>
            
                
              </div>
           
              <button type="submit" class="btn btn-primary mt-3 mr-2 float-right">حفظ</button>
            </form>
    @endsection




</x-app>
