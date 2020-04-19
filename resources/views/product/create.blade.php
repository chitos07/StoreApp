<x-app>


    @section('content')

            <div class="text-right mr-3 mt-3">

                 <h3 class="btn btn-primary">تعديل بيانات القسم</h3>

            </div>

          <form method="POST" action="{{ route('product_store')}}">
              @csrf
              <div class="form-row ">
                <div class="col mb-2">
                  <input
                   type="text"
                   class="form-control" 
                   placeholder="اسم المنتج"
                   name="productName"
                   >
                </div>
                
                 <select class="form-control mb-2" name="productcat_id">
                      <option value=""> القسم التابع ليه</option>
                      @foreach ($product_categroies as $cats)
                 <option value="{{ $cats->id }}">{{$cats->categorieName}}</option>
                      @endforeach
                     
                 </select>
              
                <div class="col mb-2">
                  <input 
                  type="text" 
                  class="form-control" 
                  placeholder="الكمية"
                  name="productQuantity"
                  >
                </div>
                <div class="col mb-2">
                  <input 
                  type="text" 
                  class="form-control"
                  placeholder="السعر"
                  name="productPrice" 
                   >
                </div>
            
                
              </div>
           
              <button type="submit" class="btn btn-primary mt-3 mr-2 float-right">حفظ</button>
            </form>
    @endsection




</x-app>
