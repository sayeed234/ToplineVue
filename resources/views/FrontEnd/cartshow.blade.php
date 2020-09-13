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
<br><br><br>
<div class="container">
     <div class="row">            
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
                   
           <div class="col-md-8">
              <div class="col-md-12 head">
                  <div class="col-md-6"><h3>My Cart (4 Items)</h3> </div>
                  <div class="col-md-6"><h3>Total: 1,186 Tk.</h3> </div>
              
           </div>
         <br><br><br>
           <div class="col-md-12 effect">
              <div class="row">
                    <div class="col-sm-12 ">
                              <div class="col-sm-3 ">
                                  <img src="img/category/cat1.png" height="60px; " >     
                              </div>
                              <div class="col-sm-5 "> 
                              <h5>Fortune Oil</h5>                              
                              </div>
                              <div class="col-sm-2 ">
                               <br>
                              <input type="number" value="1" min="1">
                              </div>
                              <div class="col-sm-2 ">
                                        <br>
                                        9409 Tk.
                              </div>
                             
                         </div>
                        
                    <div class="col-sm-12">
                              <hr>
                        gggggggggggggggggggggg
                   </div>
        
         <div class="col-sm-6"></div>
         <div class="col-sm-6"><button type="button" class="btn btn-success btn-lg btn-block" style="color:gainsboro;"><span style="font-size:20px;"><b>Continue To Payment</b></span></button> </div>
              </div>
           </div>
          </div>
     </div>
</div>
<br>
<br>
<br>
<script>
</script>
@endsection