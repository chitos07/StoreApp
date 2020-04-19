<x-app>


    @section('content')

            <div class="text-right mr-3 mt-3">

                 <h3 class="btn btn-primary">تعديل بيانات القسم</h3>

            </div>

     <div class="m-2">
     <form method="POST" action="{{ route('product_update' , $Product) }}"">
            @csrf
            @method('PATCH')
           
            <div class="form-row ">
              <div class="col mb-2">
                <input
                 type="text"
                 class="form-control" 
                 placeholder="اسم المنتج"
                 name="productName"
              value="{{$Product->productName}}"
                 >
              </div>
              
               <select class="form-control mb-2" name="productcat_id">

                    <option value=""> القسم التابع ليه</option>
                      @foreach ($lol as $item)

                      <option  value="{{ $item->id}}" 
                        
                         {{$item->id == $Product->productcat_id ? 'selected="selected"' : '' }} >

                         {{$item->categorieName }}</option>
                   
                      @endforeach
            
                   
               </select>
            
              <div class="col mb-2">
                <input 
                type="text" 
                class="form-control" 
                placeholder="الكمية"
                name="productQuantity"
                value="{{$Product->productQuantity}}"
                >
              </div>
              <div class="col mb-2">
                <input 
                type="text" 
                class="form-control"
                placeholder="السعر"
                name="productPrice" 
                value="{{$Product->productPrice}}"
                 >
              </div>
          
              
            </div>
         
            <button type="submit" class="btn btn-primary mt-3 mr-2 float-right">حفظ</button>
          </form>



     </div>

    @endsection




</x-app>
