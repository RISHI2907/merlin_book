<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("Location:../login_form.php");
  //echo isset($_SESSION["uid"]);
}
//echo $_SESSION['uid'];
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      Form
    </title>
    <meta name="viewport" content-type="width-device-width initial-scale=1">
     <link rel="stylesheet" type="text/css" href="cssstyle.css">
    </head>
  <body>
    <div class="container">
      <form action="submit.php" method="post" id="survey-form" enctype="multipart/form-data">
        <center><h1 >Product Details</h1></center>
         <div class="row">
          <div class="col1">
        <label for="ISBN">ISBN &nbsp;<sup>*</sup></label>
      </div>
      <div class="col2">
        <input type="text" id="ISBN" name="ISBN" placeholder="ISBN" required>
      </div>
        </div>
         <div class="row">
          <div class="col1">
        <label for="Title">Book Title &nbsp;<sup>*</sup></label>
      </div>
      <div class="col2">
        <input type="text" id="Title" name="Title" placeholder="Title" required>
      </div>
        </div>

          <div class="row">
          <div class="col1">
        <label for="Author">Book Author &nbsp;<sup>*</sup></label>
      </div>
      <div class="col2">
        <input type="text" id="Author" name="Author" placeholder="Author Name" required>
      </div>
        </div>
         <div class="row">
          <div class="col1">
        <label for="Publisher">Book Publisher &nbsp;<sup>*</sup></label>
      </div>
      <div class="col2">
        <input type="text" id="Publisher" name="Publisher" placeholder="Publisher Name" required>
      </div>
        </div>

         <div class="row">
          <div class="col1">
        <label for="vegsand">Book Language &nbsp;<sup>*</sup></label>
      </div>
      <div class="col2">
        <input type="text" id="Language" name="Language" placeholder="Language" required>
      </div>
        </div>


                 <div class="row">
                  <div class="col1">
                <label for="vegsand">Book Category &nbsp;<sup>*</sup></label>
              </div>
              <div class="col2">
                <input type="text" id="Category" name="Category" placeholder="Genre" required>
              </div>
                </div>


                         <div class="row">
                          <div class="col1">
                        <label for="vegsand">Book Edition &nbsp;<sup>*</sup></label>
                      </div>
                      <div class="col2">
                        <input type="text" id="Edition" name="Edition" placeholder="Edition" required>
                      </div>
                        </div>


                                               <div class="row">
                                                  <div class="col1">
                                                <label for="vegsand">Book Pages &nbsp;<sup>*</sup></label>
                                              </div>
                                              <div class="col2">
                                                <input type="text" id="Edition" name="pages" placeholder="Pages" required>
                                              </div>
                                                </div>


                                                <div class="row">
                                                 <div class="col1">
                                               <label for="Title">Book rating &nbsp;<sup>*</sup></label>
                                             </div>
                                             <div class="col2">
                                               <input type="text" id="rating" name="rating" placeholder="Rating" required>
                                             </div>
                                               </div>

                                               <div class="row">
                                                <div class="col1">
                                              <label for="Title">Book price &nbsp;<sup>*</sup></label>
                                            </div>
                                            <div class="col2">
                                              <input type="text" id="price" name="price" placeholder="Price" required>
                                            </div>
                                              </div>

                                              <div class="row">
                                               <div class="col1">
                                             <label for="Title">Book binding &nbsp;<sup>*</sup></label>
                                           </div>
                                           <div class="col2">
                                             <input type="text" id="Title" name="binding" placeholder="Binding" required>
                                           </div>
                                             </div>



                                             <div class="row">
                                              <div class="col1">
                                            <label for="Title">Book picture &nbsp;<sup>*</sup></label>
                                          </div>
                                          <div class="col2">
                                            <input type="file"  name="uploadfile"  required/>
                                          </div>
                                            </div>



                                            <div class="row">
                                             <div class="col1">
                                           <label for="Title">Book quantity &nbsp;<sup>*</sup></label>
                                         </div>
                                         <div class="col2">
                                           <input type="text" id="Title" name="quantity" placeholder="Enter Quantity" required>
                                         </div>
                                           </div>


        <br>
        <br>

      <input type="submit" name="sell" value="   Order it  ">
      </form>
      </div>

    </body>
  </html>';


?>
