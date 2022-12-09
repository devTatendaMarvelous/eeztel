<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/app.css">
     <link rel="stylesheet" href="assets/css/custom.min.css">
     <link rel="stylesheet" href="assets/css/icons.min.css">
     <title>Document</title>
    
</head>
<body>
     <!-- auth page content -->
<div class="auth-page-content" id="generatePDF">
     <div class="container p-2">
         
          <div class="row">
               <div class="col-md-4">
                    <img src="assets/images/nomedia.png" alt="">
               </div>
                <div class="col-md-4">
                     <h1 class=" text-center">EasyGab Quotation</h1>
               </div>
                <div class="col-md-4">
                    <div class="row">
                        
                         <input type="text" class="form-control col-md-9 " placeholder="Quotation No:">
                         <input type="text" class="form-control col-md-9 mt-2" placeholder="Date">
                         <input type="text" class="form-control col-md-9 mt-2" placeholder="Client Name:">
                    </div>
               </div>
          </div>
        <div class="row">
          <div class="card">
               <div class="card-header">
                    <div class="row text-left">
                         <div class="col-md-6">
                              <strong>From</strong>
                         </div>
                         <div class="col-md-6">
                              <strong>To</strong>
                         </div>
                    </div>
               </div>

               <div class="card-body">
                    <div class="row">
                         <div class="col-md-6">
                              <div class="row">
                        
                                   <input type="text" class="form-control col-md-9 " placeholder="Company Name:">
                                   <input type="text" class="form-control col-md-9 mt-1" placeholder="Reg No:">
                                  
                                   <input type="text" class="form-control col-md-9 mt-1" placeholder="Reference:">
                                   
                              </div>
                         </div>

                         <div class="col-md-6">
                              <div class="row">
                        
                                   <input type="text" class="form-control col-md-10 " id="name" placeholder="Customer Name:">
                                   <input type="text" class="form-control col-md-10 mt-1" placeholder="Vat No:">
                                   
                              </div>
                         </div>
                    </div>

                    <div class="row mt-5">
                         <p class="col-12">
                              Thank you for your enquiry. The following are the current prices for the products reffered to in your enquiry. <br>The quotation subject is in USD valuation. <br>ZWL rate can also be agreed upon.
                         </p>
                    </div>

                    <div class="row">
                         <table class="table table-striped">
                              <tr >
                                   <th>Quantity</th>
                                   <th>Description</th>
                                   <th>Unit Price</th>
                                   <th>Total Price</th>
                              </tr>
                             
                              <tbody>
                                    <tr >
                                        <td class="product col-md-1"><input  type="number" class="qty form-cont rol col-12 " ></td>
                                        <td class="col-md-9"><input type="text" class="form-cont rol col-md-11 " ></td>
                                        <td class="col-md-1"> <input type="number" class="price form-c ontrol ml-3 col-md-11 " onblur="calculate()"></td>
                                        <td class="col-md-1"><input  type="text" class="total form-cont rol col-12 " readonly></td>
                                   </tr>
                                    <tr >
                                        <td class="product col-md-1"><input  type="number" class="qty form-cont rol col-12 " ></td>
                                        <td class="col-md-9"><input type="text" class="form-cont rol col-md-11 " ></td>
                                        <td class="col-md-1"> <input type="number" class="price form-c ontrol ml-3 col-md-11 " onblur="calculate()"></td>
                                        <td class="col-md-1"><input  type="text" class="total form-cont rol col-12 " readonly></td>
                                   </tr>
                                    <tr >
                                        <td class="product col-md-1"><input  type="number" class="qty form-cont rol col-12 " ></td>
                                        <td class="col-md-9"><input type="text" class="form-cont rol col-md-11 " ></td>
                                        <td class="col-md-1"> <input type="number" class="price form-c ontrol ml-3 col-md-11 " onblur="calculate()"></td>
                                        <td class="col-md-1"><input  type="text" class="total form-cont rol col-12 " readonly></td>
                                   </tr>



                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <th>Total</th>
                                        <td class="col-md-1"><input id="allTotal" type="text" class="form-cont rol col-12 " readonly></td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>


          </div>
        </div>
            
                  
     </div>
     <!-- end container -->
</div>

                                        <div class="mt-4">
                                             <button class="btn btn-success w-100" id="download">download</button>
                                        </div>

                                         <script src="/app.js"></script>
<script src="/pdf.js"></script>
<script src="/download.js"></script>
</body>
</html>



