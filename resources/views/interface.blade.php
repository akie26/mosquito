@extends ('layouts.app')
@section('content')
    

            <div class="mt-2">
            <div class="row">
            <div class="col-md-8">    
            <div class="itemWrap">
                @foreach ($products as $product)
                    <div class="item">
                        <img src="/storage/image/{{$product->image}}" alt="" width="100px" height="100px" class="text-center">
                        <p class="text-center"><span>{{$product->name}}</span></p>
                        <p class="text-center"><span>{{$product->price}}</span></p>
                    </div>
                    @endforeach   
                </div>       
            </div>
            <div class="col-md-4 mt-2">
                <div class="row">
                    <div class="col">
                        <input type="text" placeholder="Scan Code">
                    </div>
                    <div class="col mt-1">
                        <h5>{{$name->name}}</h5>
                    </div>
                </div>
                <table class="table table-bordered" style="font-family: montserrat,Bahnschrift;">
                    <thead>
                        <tr class="text-center" style="color:#000000;background:#EAEDED;">
                            <th>Name</th>
                            <th>Qty</th>
                            <th class="text-right">Price</th>
                        </tr>
                    </thead>
                    <tbody style="height:300px;">
                    <tr>
                        <td>Example#1</td>
                        <td>1</td>
                        <td>33.3</td>
                    </tr>
                    <tr>
                        <td>Example#2</td>
                        <td>1</td>
                        <td>33.3</td>
                    </tr>
                    <tr>
                        <td>Example#3</td>
                        <td>1</td>
                        <td>33.3</td>
                    </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col" style="margin-left:10px;font-size:20px;font-family: montserrat,Bahnschrift;">Total:</div>
                    <div class="col text-right" style="margin-right:5px;">99.90</div>
                </div>
                  <div class="row">
                      <div class="col">
                          <button class="btn btn-danger">Cancel</button>
                      </div>
                      <div class="col text-right">
                          <button class="btn btn-info ">Checkout</button></div>
                  </div>
            </div>

















            {{--ROW END --}}
        </div>
    </div>
@endsection