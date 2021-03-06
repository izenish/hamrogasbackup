

<?php 
include("include/header.php");
  include("Todatabase/add_admin.php");
 ?>

<link rel="stylesheet" type="text/css" href="css/add_Staff.css">

  <div class="main_body"> 
    <div class="sidebar_menu">
          <div class="inner__sidebar_menu">

            <ul>
              <li >
                <a href="index.php" style="background: #5343c7; color: #fff;">
                  <span class="icon">
                    <i class="fas fa-border-all"></i></span>
                  <span class="list">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="charts.php">
                  <span class="icon"><i class="fas fa-chart-pie"></i></span>
                  <span class="list">Charts</span>
                </a>
              </li>
                             <li>
                 <button class="dropdown-btn" >   
                    <span class="icon"><i class="far fa-comments"></i></span>
                    <span class="list">List</span>
                    <span class="down"><i class="fa fa-caret-down"></i></span>
                    
                  </button>
               <div class="dropdown-container" >
                     <a href="list.php">
                      <span class="icon"><i class="fas fa-users"></i></span>     
                      <span class="list">UnDelivered list</span>
                    </a>
                    <a href="pending.php" >
                        <span class="icon"><i class="fas fa-cog"></i></span> 
                        <span class="list">Unverified List</span>
                      </a>
                      <a href="Delivered_list.php" >
                        <span class="icon"><i class="fas fa-cog"></i></span> 
                        <span class="list">Delivered List</span>
                      </a>
                  </div>
                     <li>
                 <button class="dropdown-btn" >   
                    <span class="icon"><i class="fab fa-product-hunt"></i></span>
                    <span class="list">Product</span>
                    <span class="down"><i class="fa fa-caret-down"></i></span>
                    
                  </button>

                  <div class="dropdown-container" >
                     <a href="product.php">
                      <span class="icon"><i class="fas fa-plus"></i></span>     
                      <span class="list">Add</span>
                    </a>
                      <a href="Stock.php" >
                        <span class="icon"><i class="far fa-comments"></i></span> 
                        <span class="list">Stock</span>
                      </a>
                  </div>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-address-book"></i></span>
                  <span class="list">Contact</span>
                </a>
              </li>
               <li>
                 <button class="dropdown-btn" >   
                    <span class="icon"><i class="fas fa-truck-loading"></i></span>
                    <span class="list">Admin</span>
                    <span class="down"><i class="fa fa-caret-down"></i></span>
                    
                  </button>

                  <div class="dropdown-container" style="background: #5343c7; color: #fff;">
                     <a href="add_admin.php">
                      <span class="icon"><i class="fas fa-plus"></i></span>     
                      <span class="list">Add</span>
                    </a>
                 
                      <a href="admin_list.php" >
                        <span class="icon"><i class="fas fa-cog"></i></span> 
                        <span class="list">Manage</span>
                      </a>
                  </div>
              </li>
              <li>
                 <button class="dropdown-btn" >   
                    <span class="icon"><i class="fas fa-truck-loading"></i></span>
                    <span class="list">Delivery staff</span>
                    <span class="down"><i class="fa fa-caret-down"></i></span>
                    
                  </button>

                  <div class="dropdown-container" >
                     <a href="add_deliveryStaff.php">
                      <span class="icon"><i class="fas fa-plus"></i></span>     
                      <span class="list">Add</span>
                    </a>
                      <a href="add_admin.php">
                      <span class="icon"><i class="fas fa-plus"></i></span>     
                      <span class="list">Add_admin</span>
                    </a>
                      <a href="manage_deliveryStaff.php" >
                        <span class="icon"><i class="fas fa-cog"></i></span> 
                        <span class="list">Manage</span>
                      </a>
                  </div>
              </li>

                   <li>
                 <button class="dropdown-btn" >   
                    <span class="icon"><i class="far fa-comments"></i></span>
                    <span class="list">Message</span>
                    <span class="down"><i class="fa fa-caret-down"></i></span>
                    
                  </button>

                  <div class="dropdown-container" >
                     <a href="displayMessage.php">
                      <span class="icon"><i class="far fa-comments"></i></span>     
                      <span class="list">All messages</span>
                    </a>
                      <a href="unseenmsg.php" >
                        <span class="icon"><i class="fas fa-cog"></i></span> 
                        <span class="list">Unseen Messages</span>
                      </a>
                  </div>
              </li>
              <li>
                <a href="about.php">
                  <span class="icon"><i class="fas fa-address-card"></i></span>
                  <span class="list">About</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><i class="fab fa-blogger"></i></span>
                  <span class="list">Blogs</span>
                </a>
              </li>
              <li>
                <a href="map.php">
                  <span class="icon"><i class="fas fa-map-marked-alt"></i></span>
                  <span class="list">Maps</span>
                </a>
              </li>
            </ul>

            <div class="hamburger">
              <div class="inner_hamburger">
                  <span class="arrow">
                      <i class="fas fa-long-arrow-alt-left"></i>
                      <i class="fas fa-long-arrow-alt-right"></i>
                  </span>
              </div>
          </div>

          </div>
      </div>
 <div class="container">

  <form method="POST" action="" enctype="multipart/form-data">
    <div class="row" >
             <div class="col-25" >
               <h3 class="title"> Add Delivery Staff</h3>
                   <div class="ImageUpload">
                    <span class="img-div">
                      <div class="img-placeholder text-center"  onclick="triggerClick();">
                        <h4>Update Image</h4>
                      </div>
                      <img src="images/avatar.png" id="profileDisplay"> 
                    </span>
                   <input type="file" name="profileImage" style="display: none;" id="profileImage" onchange="displayImage(this);"> 
                   </div>
              </div>

              <div class="col-75">
                     <?php if (!empty($msg) || !empty($msg1)): ?>
                          <div class="alert <?php echo $msg_class ?>" role="alert">
                            <?php echo $msg; 
                              echo $msg1;
                              ?>
                          </div>
                        <?php endif; ?>
                    <h5 style="margin-top:50px;  margin-bottom: 15px;">Personal details</h5> 
                    
                    <div class="row" style="padding-left: 20px;">
                        <div class="col-50" >
                        <label for="user-name"><i class="fa fa-user"></i>User Name</label>
                        <input type="text" name="user-name" placeholder=" amanmool10" required="">
                        <label for="phone">Phone</label>
                        <input name="phone" placeholder=" 9812231231" 
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "10"/>       
                        <label for="Address">Address</label>
                        <input type="text" name="address" placeholder=" Golmadi" maxlength="10">

                          <div class="row"> 
                              <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="NY">
                              </div>
                              <div class="col-50">
                                <label for="zip_code">Zip</label>
                                <input  placeholder=" 10001" 
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                type = "number"
                                maxlength = "5" name="zip_code"/>
                              </div>
                            </div>

                        
                        </div>

                         <div class="col-50">
                        <label for="full-name"><i class="fa fa-user"></i>Full Name</label>
                        <input type="text" name="full-name" placeholder=" Aman Mool">
                        <label for="email" ><i class="fa fa-envelope"></i>Email</label>
                        <input type="email" name="email" placeholder=" amanmool@gmail.com" required="">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="" required="">
                        <label for="re-password">Re-Password</label>
                        <input type="password" name="re-password" placeholder="" required="">
                        
                        </div>
                        <input type="submit" class="btn" name="add_admin">
                     </div>   

                    
              </div>    

    </div>
  </form>
</div>
  </div>
</div>
  
  <script type="text/javascript">
    function triggerClick(e)
    {
      document.querySelector('#profileImage').click();
    }
    function displayImage(e){
      if(e.files[0])
      {
        var reader = new FileReader();
        reader.onload = function (e){
          document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }  
        reader.readAsDataURL(e.files[0]);
      }
    }
  </script>

<?= include("include/footer.php");?>



