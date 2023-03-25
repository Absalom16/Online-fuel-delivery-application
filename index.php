<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title> Fuel vendors.ltd </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  
<style>

  .px-5{
    color: black;
  }
</style>
  

</head>


<body>

<div class="hero_area">
   <!-- header section strats -->
    <header class="header_section" style="background-color:  #222831; border-radius:20px ; ">
      <div class="container" >
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand">
            <span>
              fuel vendors ltd
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php" style="color:#ffbe33;">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <!--<a class="nav-link" href="menu.html">Menu</a>-->
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#about" style="color:#ffbe33;">About us</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="logout.php" style="color:#ffbe33;">Log out</a>
              </li>
              </ul>
        </nav>
      </div>
       <!--google map-->
    <iframe src="https://www.google.com/maps/d/embed?mid=11Rm10DWv9PQv-ntFVX7s1AL1j-HQbMU&ehbc=2E312F" width="100%" height="480" style="border-radius:20px ;"></iframe> 
        <!--end of map-->
    </header>
    
   <!-- end header section -->
   
  </div>
  <!-- vendor section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          AVAILABLE VENDORS
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".shell">Shell</li>
        <li data-filter=".total">Total</li>
        <li data-filter=".rubis">Rubis</li>
        <li data-filter=".kobil">Kobil</li>
        <li data-filter=".national">National oil</li>
        <li data-filter=".delta">Delta</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">

        <!--shell-->
          <div class="col-sm-6 col-lg-4 all shell">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="IMAGES/shell.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    SHELL
                  </h5>
                  <p>
                  "Go Well, Go Shell"
                </p>
                  <div class="options">
                    <button type="button" class="btn btn-light" class="btn btn-yellow detail"   data-toggle="modal" data-target="#detail1" >
                      Petrol
                    </button>
                    <button type="button" class="btn btn-light" class="btn btn-yellow detail"  data-toggle="modal" data-target="#detail2" >
                      Diesel
                    </button>
                    <div id="detail1" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-petrol.php" method="POST">
                            <div class="px-5"><h3>Petrol</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>"></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white"  id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                            <option value="Shell">Shell</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="Moi'sBridge Shell Petrol Station">Moi'sBridge Shell Petrol Station</option>
                            <option value="Shell Petrol Eldoret Service Station">Shell Petrol Eldoret Service Station</option>
                            <option value="Shell - Eldoret">Shell - Eldoret</option>
                            <option value="Shell - New Eldoret S.S">Shell - New Eldoret S.S</option>
                            
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
                            <?php include('locations.php')?> 
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center">  <button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit"   >Lipa na Mpesa</a></button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>
                    
                    <div id="detail2" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-diesel.php" method="POST">
                            <div class="px-5"><h3>Diesel</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                            <option value="Shell">Shell</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="Moi'sBridge Shell Petrol Station">Moi'sBridge Shell Petrol Station</option>
                            <option value="Shell Petrol Eldoret Service Station">Shell Petrol Eldoret Service Station</option>
                            <option value="Shell - Eldoret">Shell - Eldoret</option>
                            <option value="Shell - New Eldoret S.S">Shell - New Eldoret S.S</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>  
                    

                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--total-->
          <div class="col-sm-6 col-lg-4 all total">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/total image.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    TOTAL
                  </h5>
                  <p>
                  "Committed to Better Energy"
                </p>
                  <div class="options">
                  <button type="button" class="btn btn-light" class="btn btn-yellow detail"   data-toggle="modal" data-target="#detail3" >
                      Petrol
                    </button>
                    <button type="button" class="btn btn-light" class="btn btn-yellow detail"  data-toggle="modal" data-target="#detail4" >
                      Diesel
                    </button>
                    <div id="detail3" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-petrol.php" method="POST">
                            <div class="px-5"><h3>Petrol</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                            <option value="Total">Total</option>
                            
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="Total Kapsoya Service Station">Total Kapsoya Service Station</option>
                            <option value="Total uganda road service station">Total uganda road service station</option>
                            <option value="Total Eldoret Service Station-wareng">Total Eldoret Service Station-wareng</option>
                            <option value="TotalEnergies Eldoret service station">TotalEnergies Eldoret service station</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>
                    
                    <div id="detail4" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-diesel.php" method="POST">
                            <div class="px-5"><h3>Diesel</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                           
                            <option value="Total">Total</option>
                            
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="Total Kapsoya Service Station">Total Kapsoya Service Station</option>
                            <option value="Total uganda road service station">Total uganda road service station</option>
                            <option value="Total Eldoret Service Station-wareng">Total Eldoret Service Station-wareng</option>
                            <option value="TotalEnergies Eldoret service station">TotalEnergies Eldoret service station</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--kenol kobil-->
          <div class="col-sm-6 col-lg-4 all kobil">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/kenol kobil.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    KENOL KOBIL
                  </h5>
                  <p>
                  "Powering Modern Technology" 
                </p>
                  <div class="options">
                    
                  <button type="button" class="btn btn-light" class="btn btn-yellow detail"   data-toggle="modal" data-target="#detail5" >
                      Petrol
                    </button>
                    <button type="button" class="btn btn-light" class="btn btn-yellow detail"  data-toggle="modal" data-target="#detail6" >
                      Diesel
                    </button>  
                    <div id="detail5" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-petrol.php" method="POST">
                            <div class="px-5"><h3>Petrol</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                            
                      
                            <option value="Kenol kobil">Kenol kobil</option>
                           
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="Kenol Kobil Station">Kenol Kobil Station</option>
                            <option value="Kenol Eldoret">Kenol Eldoret</option>
                            <option value="Kenol Kobil-Uganda Road(Eldoret)">Kenol Kobil-Uganda Road(Eldoret)</option>
                            <option value="Kobil Petrol Station">Kobil Petrol Station</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>
                    
                    <div id="detail6" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-diesel.php" method="POST">
                            <div class="px-5"><h3>Diesel</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            
                            <option value="Kenol kobil">Kenol kobil</option>
                            
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="Kenol Kobil Station">Kenol Kobil Station</option>
                            <option value="Kenol Eldoret">Kenol Eldoret</option>
                            <option value="Kenol Kobil-Uganda Road(Eldoret)">Kenol Kobil-Uganda Road(Eldoret)</option>
                            <option value="Kobil Petrol Station">Kobil Petrol Station</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--national oil-->
          <div class="col-sm-6 col-lg-4 all national">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/national oil.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    NATIONAL OIL
                  </h5>
                  <p>
                  "Lubricating The World. No Dash for Gas."  
                </p>
                  <div class="options">
                    
                    
                  <button type="button" class="btn btn-light" class="btn btn-yellow detail"   data-toggle="modal" data-target="#detail7" >
                      Petrol
                    </button>
                    <button type="button" class="btn btn-light" class="btn btn-yellow detail"  data-toggle="modal" data-target="#detail8" >
                      Diesel
                    </button>
                    <div id="detail7" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-petrol.php" method="POST">
                            <div class="px-5"><h3>Petrol</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                            
                            <option value="National oil">NAtional oil</option>
                            
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="National oil-langas">National oil-langas</option>
                            <option value="National oil - eldoret kapsabet road">National oil - eldoret kapsabet road</option>
                            <option value="National oil-eldoret">National oil-eldoret</option>
                            <option value="National Oil">National Oil</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>
                    
                    <div id="detail8" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-diesel.php" method="POST">
                            <div class="px-5"><h3>Diesel</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                            
                            <option value="National oil">NAtional oil</option>
                            
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="National oil-langas">National oil-langas</option>
                            <option value="National oil - eldoret kapsabet road">National oil - eldoret kapsabet road</option>
                            <option value="National oil-eldoret">National oil-eldoret</option>
                            <option value="National Oil">National Oil</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--rubis-->
          <div class="col-sm-6 col-lg-4 all rubis">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/rubis.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    RUBIS
                  </h5>
                  <p>
                  “Simply Affordable for You”
                </p>
                  <div class="options">
                    
                  <button type="button" class="btn btn-light" class="btn btn-yellow detail"   data-toggle="modal" data-target="#detail9" >
                      Petrol
                    </button>
                    <button type="button" class="btn btn-light" class="btn btn-yellow detail"  data-toggle="modal" data-target="#detail10" >
                      Diesel
                    </button>
                    <div id="detail9" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-petrol.php" method="POST">
                            <div class="px-5"><h3>Petrol</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                           
                            <option value="Rubis">Rubis</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="Rubis Uganda Road Service Station">Rubis Uganda Road Service Station</option>
                            <option value="Rubis Burnt Forest Service Station">Rubis Burnt Forest Service Station</option>
                            <option value="Rubis Turbo Service Station">Rubis Turbo Service Station</option>
                            <option value="Rubis Turbo Service Station">Rubis Turbo Service Station</option>
                        
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>
                    
                    <div id="detail10" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-diesel.php" method="POST">
                            <div class="px-5"><h3>Diesel</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                            
                            <option value="Rubis">Rubis</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="Rubis Uganda Road Service Station">Rubis Uganda Road Service Station</option>
                            <option value="Rubis Burnt Forest Service Station">Rubis Burnt Forest Service Station</option>
                            <option value="Rubis Turbo Service Station">Rubis Turbo Service Station</option>
                            <option value="Rubis Turbo Service Station">Rubis Turbo Service Station</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--delta-->
          <div class="col-sm-6 col-lg-4 all delta">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/delta oil.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    DELTA
                  </h5>
                  <p>
                  "Only People Make the Difference"
                </p>
                  <div class="options">
                    
                  <button type="button" class="btn btn-light" class="btn btn-yellow detail"   data-toggle="modal" data-target="#detail11" >
                      Petrol
                    </button>
                    <button type="button" class="btn btn-light" class="btn btn-yellow detail"  data-toggle="modal" data-target="#detail12" >
                      Diesel
                    </button>
                    <div id="detail11" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-petrol.php" method="POST">
                            <div class="px-5"><h3>Petrol</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                            
                            <option value="Delta">Delta</option>
                            
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="Delta - Soy">Delta - Soy</option>
                            <option value="Delta 2">Delta 2</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>
                    
                    <div id="detail12" class="modal fade detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content" style="border-radius:20px ;">
                          <div class="modal-body">
                            <img class="img-fluid" src="images/petrol.jpg" alt=" service 1" style="border-radius: 10px;">
                                <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
                                   <div x-data="{
                                    price: parseInt( '150'), 
                                    quantity: parseInt( '5'), 
                                    taxes: parseInt( '50'),
                                    delivery_fee:parseInt('100'),
                                    
                                  }">
                         <form action="process-diesel.php" method="POST">
                            <div class="px-5"><h3>Diesel</h3></div>
                         <div class="px-5">Price per litre:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="price" x-model.number="price"  readonly required
            value="<?php if (isset($_POST['price']))echo $_POST['price'];?>" ></div>
                          <div class="px-5"> Taxes:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="tax" x-model.number="taxes"  readonly required
            value="<?php if (isset($_POST['tax']))echo $_POST['tax'];?>" ></div>
                          <div class="px-5"> Delivery fee:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text"  type="number"  name="delivery_fee" x-model.number="delivery_fee"  readonly required
            value="<?php if (isset($_POST['delivery_fee']))echo $_POST['delivery_fee'];?>" ></div>
                          <div class="px-5"> Quantity in litres:<input  class=" d-block custom2 form-control mt-3 bg-white "  id="text" type="number"  name="quantity" x-model.number="quantity" required
            value="<?php if (isset($_POST['quantity']))echo $_POST['quantity'];?>" ></div>
                          <div class="px-5"> Total cost:<input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="total"    readonly required
            value="<?php if (isset($_POST['total']))echo $_POST['total'];?>" ></div><br>
            <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="company" required
            value="<?php if (isset($_POST['company']))echo $_POST['company'];?>" >
                            <option value="0">Gas company</option>
                            
                            <option value="Delta">Delta</option>
                           
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="gas_station" required
            value="<?php if (isset($_POST['gas_station']))echo $_POST['gas_station'];?>" >
                            <option value="0">Gas station</option>
                            <option value="Delta - Soy">Delta - Soy</option>
                            <option value="Delta 2">Delta 2</option>
                          </select>
                          </div><br><br><br>
                          <div class="px-5" >
                          <select class="px-5" class=" d-block custom2 form-control mt-3 bg-white" id="text" type="text" name="location" required
            value="<?php if (isset($_POST['location']))echo $_POST['location'];?>" >
            <?php include('locations.php')?>
                          </select>
                          </div><br><br>
                          <div class="px-5"> <input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text"  name="phone_number" placeholder="Phone number" required
            value="<?php if (isset($_POST['phone_number']))echo $_POST['phone_number'];?>" ></div>
            <div class="px-5"><input  class=" d-block custom2 form-control mt-3 bg-white " id="text" type="text" x-bind:value="price * quantity + taxes + delivery_fee  " name="amount_paid"    readonly required
            value="<?php if (isset($_POST['amount_paid']))echo $_POST['amount_paid'];?>" ></div><br>
                           <div class="mt-5 align-items-center d-flex justify-content-center"><button class="btn btn-success  custom bg-lg" onclick="myFunction()" type="submit" name="submit">Lipa na Mpesa</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                           <script>
                                                function myFunction(){
                                                  alert("Thank you! your payment request has been received");
                                                }
                                              </script>
                        </form>
                    </div>
                           </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end vendor section -->
  <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          About this company.
        </h2>
      </div>
  <!-- about section -->

  <section class="about_section layout_padding" style="border-radius:20px ;">
    <div class="container  ">
    <a id="about">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" style="border-radius:20px ;" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Fuel vendors.ltd
              </h2>
            </div>
            <p>
              This is all about us.
            </p>
          </div>
        </div>
      </div>
    </a>
    </div>
  </section>

  <!-- end about section -->

  
  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                 Best company ever. I recommend to anyone who needs fuel services. 
              </p>
                <h6>
                  Moana Michell
                </h6>
              </div>
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                This company is the best because of their pocket friendly services.  
              </p>
                <h6>
                  Mike Hamell
                </h6>
              </div>
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section" style="border-radius:20px ;" >
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +254714022687
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Fuel vendors.ltd
            </a>
            <p>
             simply affordable for everyone.
          </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            24/7
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>