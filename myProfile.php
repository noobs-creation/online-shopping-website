<style>

body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

</style>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<?php
session_start();

include "db.php";
$user_id=$_SESSION['uid'];

?>



<div class="container emp-profile">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        
                                        <?php
                                          

                                          $fname=$_SESSION['firstname'];
                                          $lname=$_SESSION['lastname'];
                                          $name=$fname.' '.$lname;
                                          echo $name;

                                          

                                          $result=mysqli_query($con,"select * from user_info where user_id='$user_id'");

                                          /*while(list($user_id,$first_name,$last_name,$email,$password,$phone,$address1,$address2)=mysqli_fetch_array($result))
                                          { 
                                                echo "<tr><td>$user_id</td><td>$first_name</td><td>$last_name</td><td>$email</td><td>$password</td><td>$phone</td><td>$address1</td><td>$address2</td></tr>";
                                          }*/



                                        ?>
                                    </h5>
                                    
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                      <a href="index.php">Back</a></button>
                      <br>
                      <!--
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    --></div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class='col-md-6'><p>
                                            
                                            <?php
                                            
                                              $fetcher=mysqli_fetch_assoc($result);
                                              $id=$fetcher['user_id'];
                                            
                                                echo "$id";
                                        
                                            ?>
                                              
                                            </p></div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6"><p>
                                              <?php
                                                $em=$fetcher['email'];
                                                echo "$em";

                                                ?>
                                            </p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
                                                $ph=$fetcher['mobile'];
                                                echo "$ph";

                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address 1</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
                                                $a1=$fetcher['address1'];
                                                echo "$a1";

                                                ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address 2</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
                                                $a2=$fetcher['address2'];
                                                echo "$a2";

                                                ?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>  
              </div>

                <div class="container emp-profile">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <h4 class="card-title"> Products Bought</h4>
                
                                  </div>
                                        
                                    </h5>
                                    
                            
                        </div>
                    </div>
                    <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1">
                    <thead class=" text-primary">
                      <tr>
                        <th>Name</th>
                        <th>Price</th>
                      </tr>
                      <?php

                      $query_products=mysqli_query($con,"SELECT product_id,product_title,product_price FROM products WHERE product_id IN (SELECT product_id FROM order_products WHERE order_id IN (SELECT order_id FROM orders_info WHERE user_id='$user_id'))");

                      //$result=mysqli_query($con,"select product_id,product_image, product_title,product_price from products Limit $page1,12");

                      while(list($product_id,$product_name,$price)=mysqli_fetch_array($query_products))
                        {
                        echo "<tr><td>$product_name</td><td>$price</td></tr>";
                        }

                        ?>
                    </thead>
                  </table>
                </div>
              </div>

                

              