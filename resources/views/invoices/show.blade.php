
<x-app>


    @section('content')
  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Invoice {{ $SalesInvoices->id}}</div>

                   
                    <div class="card-body">
                        <div class="container">

                            <div class="row clearfix">
                                @if (config('invoices.logo_file') != '')
                                    <div class="col-md-12 text-center">
                                        <img src="{{ config('invoices.logo_file') }}" />
                                    </div>
                                @endif

                                <div class="col-md-4 offset-4 text-center">
                                <b>Invoice Number {{$SalesInvoices->id}}</b>
                                    <br />
                                     {{$SalesInvoices->created_at}}
                                </div>
                            </div>

                          
                            <div class="row clearfix" style="margin-top:20px">
                                <div class="col-md-12">
                                    <table class="table table-bordered table-hover" id="tab_logic">
                                        <thead>
                                        <tr>
                                            <th class="text-center"> # </th>
                                            <th class="text-center"> المنتج </th>
                                            <th class="text-center"> الكمية </th>
                                            <th class="text-center"> الحجم</th>
                                            <th class="text-center"> السعر </th>
                                            <th class="text-center"> المكسب  </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($SalesInvoices->Sales as $item)
                                         
                                            <tr id='addr0'> 
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->Product->productName }}</td>
                                                <td>{{ $item->Qunitiy}}</td>
                                                <td>{{ $item->Packages->Unit_Price}}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{
                                                ($item->price  -  ($item->Qunitiy * $item->Product->unitPrice + $item->Packages->Unit_Price)) 
    
                                                 }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix" style="margin-top:20px">
                            <div class="col-md-12">
                                <a class="btn btn-primary float-right" href="{{route('editproduct' , $SalesInvoices)}}" role="button">تقفيل الفاتورة</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
    @endsection




</x-app>