<!DOCTYPE html>
<html>
<head>
<?php include "links.php"; ?>
    <title>Handworker at your door step</title>
</head>
<body style="font-family: 'Lato', sans-serif; margin: 0px;">
<div class="row">
<?php include "navigation.php"; ?>
    </div>

   <div class="container" style="padding-bottom: 20px;">
      <div class="row">
      <div class="col-md-2">
         
      </div>
      <div class="col-md-8">
         <h1 style="padding-bottom: 48px; font-weight: bold; font-size: 50px;">Edit Profile</h1>
        
         


   <form class="form-inline" style="line-height: 38px;">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" value="something" id="name" disabled>
  </div>
  <button class="btn info">Edit Info</button>
  <br>
  <div class="form-group">
    <label for="pwd">Category:</label>
    <input type="Category" class="form-control" id="cat">
  </div>
  <button class="btn info">Edit Info</button>
  <br>


  <div class="form-group">
    <label for="name">Sub-category:</label>
    <input type="Category" class="form-control" id="scat">
  </div>
  <button class="btn info">Edit Info</button>
  <br>

  <div class="form-group">
    <label for="name">Location:</label>
    <input type="Location" class="form-control" id="loc">
  </div>
  <button class="btn info">Edit Info</button>
  <br>

  <div class="form-group">
    <label for="name">Phone Num:</label>
    <input type="Contact" class="form-control" id="Num">
  </div>
  <button class="btn info">Edit Info</button>
  <br>

  <h2 style="font-weight: bold;">Handworker Skills</h2>
  <div class="form-group">
      <label for="message">Skills:
      </label>
      <textarea type="text" class="form-control" id="message"
     name="message" placeholder="Your Message here" style="height: 120px; width: 100%;">
    </textarea>
   </div><br>

   <div class="row">
    <div class="portfolio">
    <h2 style="font-weight: bold;">ADD PORTFOLIO</h2>
   </div>
   </div>

<button type="button" class="btn btn-default">Choose</button>
<br>
<center>
<button style="text-align: center;" type="submit" class="btn btn-default">Submit</button>
</center>
</form>

      </div>
     
      </div>
   </div>
<div class="container-fluid" style="background-color: #323232; ">
<?php include "footer.php"; ?>
    
</div>

</body>
</html>