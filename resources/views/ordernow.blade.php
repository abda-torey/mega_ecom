@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
     <table class="table">
    <thead>
      <tr>
        
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Amount</td>
        <td>Ksh. {{$total}}</td>
        
      </tr>
      <tr>
        <td>Tax</td>
        <td>Ksh. 0</td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>Ksh. 100</td>
       
      </tr>
      <tr>
        <td>Total amount</td>
        <td>{{$total + 10}}</td>
       
      </tr>
    </tbody>
  </table>
<div>

<form action="/orderplace" method="POST">
@csrf
  <div class="form-group">
    
    <textarea name="address" class="form-control" placeholder="Enter your prefered address"></textarea>
  </div>
  <div class="form-group">
    <label>payment method:</label><br><br>
    <input type="radio" value="cash" name="payment"><span>Mpesa</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Cash on Delivery</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Card</span><br><br>
  </div>
  
  <button type="submit" class="btn btn-default">Order</button>
</form>
</div>
     </div>
</div>
@endsection 