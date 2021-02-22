
<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  
  <title>PhpValidatin</title>
  <style>
 
  
  </style>
  
 
</head>

    <body>
        <div class="">
        <section class=""><h2></h2> </section>
        <section class="">
       <hr/>
          Club Member Registration..
       <hr/>



       <?php
       
       if(isset($_POST['registration'])){
           $name=$_POST['name'];
           $uname=$_POST['uname'];
           $pass=$_POST['pass'];
           $cpass=$_POST['cpass'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
           $ad1=$_POST['address1'];
           $ad2=$_POST['Cityaddress'];
           $ad3=$_POST['Stateaddress'];
           $ad4=$_POST['zip'];

           $bd=$_POST['bdate'];
           $txt=$_POST['bio'];

           if(isset($_POST["gender"])){
            $role=$_POST["gender"];
          }

            if(isset($_POST["chk"])){
              $role1=$_POST["chk"];}

           if(!empty($name) && !empty($uname) && !empty($pass)&& !empty($cpass ) && !empty($email)   && !empty($phone) && !empty($$ad1) && !empty($ad2) && !empty($ad3) && !empty($ad4)  && !empty($role)  && !empty( $txt) )
           { 
            $success='your registration success'; 
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
                   <td>Name :</td>
                   <td> <input type ="text" name="name"/> </td>
                </tr>
                <tr>
                   <td> User Name :</td>
                   <td><input type ="text" name="uname"/></td>
                </tr>
                <tr>
                   <td> Password :</td>
                   <td><input type ="password" name="pass"/></td>
                </tr>
                <tr>
                   <td> Confirm password :</td>
                   <td><input type ="password" name="cpass"/></td>
                </tr>
                <tr>
                   <td> Email :</td>
                   <td><input type ="text" name="email"/></td>
                </tr>
                <tr>
                   <td> Phone :</td>
                   <td><input type ="text" name="phone" placeholder="+880..."/></td>
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
                   <td> Gender:</td>
                   <td>
                    <input type="radio" name="gender" value="male"/> Male<br>
                    <input type="radio" name="gender" value="female"/> Female<br>
                    <input type="radio" name="gender" value="other"/> Other
                
                  </td>
                </tr>
                
                <tr>
                   <td> Where did you here about us?:</td>
                   <td>
                    <input type="checkbox" name="chk" value="A friend or colleague" /> A friend or colleague <br>
                    <input type="checkbox" name="chk" value=" Google"/> Google <br>
                    <input type="checkbox" name="chk" value="Blog post"/> Blog post  <br>
                    <input type="checkbox" name="chk" value="News Article"/> News Article   <br>
                
                  </td>
                </tr>

                <tr>
                   <td> Bio</td>
                   <td>
                   <textarea  name="bio" placeholder="Write your bio here" ></textarea>
                
                  </td>
                </tr>





                <tr>
                   <td></td>
                   <td> <input type="submit" name="registration" value ="Register"/></td>
                </tr>
           </table>
       
     
       </form>

        </section>
        
        
        </div>
    
    </body>

</html>