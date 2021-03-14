
<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  
  <title>Student-Registration</title>
  <style>
 
  
  </style>
  
 
</head>

    <body>
        <div class="">
        <section class=""><h2></h2> </section>
        <section class="">
       <hr/>
          Student-Information-Registration..
       <hr/>



       <?php
       
       if(isset($_POST['registration'])){
          
           $uname=$_POST['fullname'];
           $cls=$_POST['cls'];
           $sub=$_POST['Sub'];
           $email=$_POST['email'];
           $phone=$_POST['phn'];
           $ad1=$_POST['address1'];
           $ad2=$_POST['Cityaddress'];
           $ad3=$_POST['Stateaddress'];
           $ad4=$_POST['zip'];
           $bd=$_POST['sclclg'];

           $bd=$_POST['bdate'];
           $txt=$_POST['bio'];

           if(isset($_POST["gender"])){
            $role=$_POST["gender"];
          }

          if(isset($_POST["tgender"])){
            $role2=$_POST["tgender"];
          }

            if(isset($_POST["chk"])){
              $role1=$_POST["chk"];}

           if(!empty($uname) && !empty($cls) && !empty($sub) && !empty($email)   && !empty($phone) && !empty($$ad1) && !empty($ad2) && !empty($ad3) && !empty($ad4)  && !empty($role)  && !empty($role2) && !empty( $txt) )
           { 
              //here you have to write database query(for registration )!



            $success='Student Registration Successfull';
               
        } 
        else{
                 $error='please fillup the Required field'; 
              }


       }
   
       ?>
       
       <form  action="" method="post">
           <h2>
           <?php 
             if (isset($error)){ 
               echo $error; 
            }
    
            ?>
           </h2>
           
           <h2>
           <?php 
             if (isset($success)){ echo $success; 
            }
    
            ?>
           </h2>

            <table>
                
                <tr>
                   <td> Full Name :</td>
                   <td><input type ="text" name="fullname"/></td>
                </tr>
                <tr>
                   <td> Email :</td>
                   <td><input type ="text" name="email" placeholder="@gamil.com"/></td>
                </tr>


                <tr>
                   <td> Mobile:</td>
                   <td><input type ="text" name="phn" placeholder="+880"/></td>
                </tr>
                
                <tr>
                   <td>Class</td>
                   <td><input type ="text" name="cls" placeholder="Enter Class name"/></td>
                </tr>
                <tr>
                   <td> Subject</td>
                   <td><input type ="text" name="Sub"/></td>
                </tr>
                <tr>
                   <td> School/college :</td>
                   <td><input type ="text" name="sclclg" placeholder="school/college name"/></td>
                </tr>
                <tr>
                   <td> Address:</td>
                   <td><input type ="text" name="address1" placeholder="Street Address"/>
                   <input type ="text" name="Cityaddress" placeholder="City"/>
                   <input type ="text" name="Stateaddress" placeholder="State"/>
                   <input type ="text" name="zip" placeholder="Postal/zip code"/>
                  
                  </td>
                </tr>

                <tr>
                   <td> Birth Date:</td>
                   <td>
                    <input type ="date" name="bdate" placeholder=""/>
                
                  </td>
                </tr>
                <tr>
                   <td> Gender of Student:</td>
                   <td>
                    <input type="radio" name="gender" value="male"/> Male<br>
                    <input type="radio" name="gender" value="female"/> Female<br>
                    
                
                  </td>
                </tr>
                
                <tr>
                <td> Desired Tutor Gender:</td>
                   <td>
                    <input type="radio" name="tgender" value="male"/> Male<br>
                    <input type="radio" name="tgender" value="female"/> Female<br>
                    
                
                  </td>
                </tr>

                <tr>
                   <td> Additional Information</td>
                   <td>
                   <textarea  name="bio" placeholder="Write your your Additional Information here" ></textarea>
                
                  </td>
                </tr>





                <tr>
                   
                   <td> <input type="submit" name="registration" value ="Register"/></td>
                   <td> <a href="update.php"> update  </a></td>
                </tr>
           </table>
       
     
       </form>

        </section>
        
        
        </div>
    
    </body>

</html>