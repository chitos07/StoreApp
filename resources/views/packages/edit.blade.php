<x-app>


    @section('content')

            <div class="text-right mr-3 mt-3">

                 <h3 class="btn btn-primary">تعديل بيانات القسم</h3>

            </div>

     <div class="m-2">
     <form method="POST" action="{{ route('Packages.update' , $Packages) }}"">
            @csrf
            @method('PATCH')
           
            <div class="form-row ">
              <div class="col mb-2">
                <input
                 type="text"
                 class="form-control" 
                 placeholder="اسم المنتج"
                 name="name"
              value="{{$Packages->name}}"
                 >
              </div>
              <div class="col mb-2">
                <input
                 type="text"
                 class="form-control" 
                 placeholder="اسم المنتج"
                 name="size"
              value="{{$Packages->size}}"
                 >
              </div>
     
            
              <div class="col mb-2">
                <input 
                type="text" 
                class="form-control" 
                placeholder="الكمية"
                name="Qunitiy"
                value="{{$Packages->Qunitiy}}"
                >
              </div>
              <div class="col mb-2">
                <input 
                type="text" 
                class="form-control"
                placeholder="السعر"
                name="price" 
                value="{{$Packages->price}}"
                 >
              </div>
          
              
            </div>
         
            <button type="submit" class="btn btn-primary mt-3 mr-2 float-right">حفظ</button>
          </form>



     </div>

    @endsection




</x-app>
