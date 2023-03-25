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