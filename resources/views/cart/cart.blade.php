@extends('layout.app')
@section('conten')

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card shopping-cart" style="border-radius: 15px;">
            <div class="card-body text-black">
  
                <div class=" px-5 py-4">
  
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>
                    
                  @foreach ($data as $item => $cart)
                 
                  <?php  
                  $subtotal=$cart["qty"]*$cart["price"];
                  ?>
                 
                    <div class="d-flex align-items-center mb-5 ">
                        <div class="flex-grow-1 ms-3">
                        <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                        <h5 class="text-primary">{{ $cart->producs->name}}</h5>
                        <h6 style="color: hsl(333, 25%, 16%);">{{ $cart->producs->description }}</h6>
                        <div class="d-flex align-items-center">
                            <p class="fw-bold mb-0 me-5 pe-3">Rp &nbsp;{{ $cart->producs->price}},-</p>
                            <div class="def-number-input number-input safari_only">

                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="minus"><i class="bi bi-dash"></i></button>
                            <input class="qty" min="0" name="qty" value="{{ $cart->qty }}"  data-item="{{ $cart->id }}"
                                type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="plus" ><i class="bi bi-plus"></i></button>

                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
  
                  <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
                 
  
                  <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                    <h5 class="fw-bold mb-0">Total:</h5>
                    <h5 class="fw-bold mb-0">{{ $subtotal }}</h5>
                  </div>
                </div>
  
                </div>
              </div>
  
          </div>
        </div>
      </div>
    </div>
  </section>    
@endsection

{{--  --}}

@section('script')
<script type="text/javascript">
(function(){
  const classname = document.querySelectorAll('qty');
  Array.from(classname).forEach(function(element){
    element.addEventlistener('change',function(){
      const id =element.getAttribute('data-item');
      axios.patch('/update/cart/${id}',{
        qty:this.value,
        id:id
      })
      .then(function(response){
        window.location.herf='/cart'
      })
      .catch(function(error){
        console.log(error);
      });
    });   
  });
}) ();
</script>   
@endsection