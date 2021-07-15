<!DOCTYPE html>

<html>
    
    <head>
        
        <title>
            our search engine 
        </title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    </head>
    
    <body>
      
          <div class="container">
              
             <br>
             
              
              <center>
                  <h2>
                    <b>
                      insert Website
                      </b>
                  </h2>
              </center>
              <br>
              
              <form action="insert_site.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                     <div class="row">
                         <label class="col-sm-2" for="stitle">
                             Site Title
                         </label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="stitle" name="s_title" placeholder="Enter Site Title" required >
                         </div>
                         
                     </div> 
                      
                  </div>
                  
                
                
                
                  
                   <div class="form-group">
                     <div class="row">
                         <label class="col-sm-2" for="slink">
                             Site Link
                         </label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="s_link" name="s_link" placeholder="Enter Site Link" required >
                         </div>
                         
                     </div>
                      
                  </div>
                  
             
                  
                  
                   <div class="form-group">
                     <div class="row">
                         <label class="col-sm-2" for="skey">
                             Site Keywords
                         </label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control" id="stitle" name="s_key" placeholder="Enter Site Keyword" required >
                         </div>
                         
                     </div>
                      
                  </div>
                  
                
                
                
                  
                   <div class="form-group">
                     <div class="row">
                         <label class="col-sm-2" for="sdes">
                             Site Description
                         </label>
                         <div class="col-sm-10">
                             <textarea class="form-control" id="sdes" name="s_des" placeholder="Enter Site Description" required></textarea> 
                         </div>
                         
                     </div>
                      
                  </div>
                  
                  
                
                  <div class="form-group">
                     <div class="row">
                         <label class="col-sm-2" for="img">
                             Site Image
                         </label>
                         <div class="col-sm-10">
                             <input type="file" class="form-control" name="simg" required>
                             
                         </div>
                         
                     </div>
                      
                  </div>
                   
              
              <div class="form-group">
                     <div class="row"> 
                      <center>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;   
                
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;             
          <input type="submit" class="btn btn-outline-success" name="submit" value="Add Website">
                    &nbsp;
                    &nbsp;

            <input type="reset" class="btn btn-outline-danger" name="cancel" value="Cancel">
                        </center>
                       </div>
                  </div>
              </form> 
              
              
          </div>
      
      
       
           <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         
    </body>
</html>


<?php
 
   $mysqli = mysqli_connect("localhost", "root", "");
    mysqli_select_db($mysqli, "search");

if(isset($_POST["submit"]))
{ 
        $si_title = addslashes($_POST["s_title"]);
        $si_link = addslashes($_POST["s_link"]); 
       $si_key = addslashes($_POST["s_key"]);
        $si_des = addslashes($_POST["s_des"]);
       $_siimg = $_FILES["simg"] ["name"];
   
    if(move_uploaded_file($_FILES["simg"] ["tmp_name"], "img/".  $_FILES["simg"] ["name"] )) 
    
    {
        $sql = "insert into website(site_title, site_link, site_key, site_des, site_img) values('$si_title', '$si_link', '$si_key', '$si_des', '$_siimg')";
        
        $rs = mysqli_query($mysqli, $sql);
        
        if($rs)
        {
            echo "<script> alert('site uploaded successfully') </script>";
        }
        else
        {
            echo  "<script> alert('uploading failed,plz try again.') </script>";
        }  
    }    
    
}



?>