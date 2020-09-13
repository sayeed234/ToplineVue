@extends('FrontEnd.layouts.app')
@section('title')
Shipping || topline.com.bd
@endsection
<style>
 .head{
 box-shadow: inset 0 0 2px #000000;
 padding: 10px;
 background:#e3e3e3;

 }
 .effect{
 box-shadow:inset 0 0 2px #000000;
 background:#e3e3e3;
 height: auto;
 padding: 10px;
 }
 .effect1{
 box-shadow:inset 0 0 2px #000000;
 height: 300px;
 padding: 10px;
 background:#e3e3e3;
 padding-bottom: 20px;
 }
 .star{
   color:red;
   font-size: 20px;
 }
</style>
<br>
@section('content')
<br><br><br><br>
<div class="container">
     <div class="row">  
<div class="col-md-1"></div>            
           <div class="col-md-4 effect1" >
                  <h4>Checkout Summary</h4> 
                  <hr> 
                  <p>Payment Details</p>
                  <table class="table">
                      <tbody>
                        <tr>
                          <td>Subtotal</td>
                          <td>2,769 TK.</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>40 TK.</td>
  
                          </tr>
                          <tr>
                              <td>Total</td>
                              <td>2,809 TK.</td>
    
                            </tr>
                            <tr>
                                <th scope="row">Payable Total</th>
                                <td><b>2,809 TK.</b></td>
      
                              </tr>
                   </tbody>
                  </table>
                    </div>
                   
           <div class="col-md-6">
              <div class="col-md-12 head">
              <h3>Shipping Address</h3>
           </div>
         <br><br><br>
           <div class="col-md-12 effect">
              <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="Max Value">Name <span class="star">*</span></label>
                        <input class="form-control" required  type="text" name="name">
                    </div> 
                    <div class="col-sm-6 form-group">
                    <label for="Max Value">Phone No <span class="star">*</span></label>
                     <input class="form-control" required  type="text" name="menu">
                     </div>
                    <div class="col-sm-6 form-group">
                         <label for="Max Value">Alternative Phone No</label>
                         <input class="form-control"  type="text" name="menu">
                    </div>
                    <div class="form-group col-md-12">
                          <label for="inputState">Town</label>
                            <select id="inputState" class="form-control">
                            <option value="Brahmanbaria" class="form-control">Brahmanbaria Sadar</option>
                       </select>
                 </div>
                 <div class="col-sm-6 form-group">
                    <label for="Max Value">Area / Para <span class="star">*</span> </label>
                    <input class="form-control"  required type="text" name="area">
               </div>
               <div class="col-sm-6 form-group">
                  <label for="Max Value">House / Holding No <span class="star">*</span> </label>
                  <input class="form-control" required type="text" name="house">
             </div>
             <div class="col-sm-12 form-group">
                <label for="Max Value">Email</label>
                <input class="form-control"  type="email" name="email">
           </div>
           <div class="col-sm-12 form-group">
              <label for="Max Value">Address <span class="star">*</span></label>
              <textarea class="form-control" required  placeholder="House #712 (1st Floor), Powa-PokurPar, Moddhopara, Brahmanbaria " type="text" name="address"></textarea>
         </div>
        
         <div class="col-sm-6"></div>
         <div class="col-sm-6"><button type="button" class="btn btn-success btn-lg btn-block" style="color:gainsboro;"><span style="font-size:20px;"><b>Continue To Payment</b></span></button> </div>
              </div>
           </div>
          </div>
          <div class="col-md-1" ></div>
     </div>
</div>
<br>
<br>
<br>
@endsection