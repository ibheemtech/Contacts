<?php
SESSION_START();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>phpmailler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  
     <div class="container mt-5">
         <div class="card">
            <div class="card-header">
                <h4>how to send email</h4>
            </div>
            <div class="card-body">
                <form action="sendmail.php" method="POST">
                   <div class="mb-3">
                    <label for="name">Full Name</label>
                     <input type="text" name="name" id="name"class="form-control" placeholder="ibheetech" required>
                     
                     <label for="email">Email address</label>
                     <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" required>
                    
                     <label for="subject">Subject</label>
                     <input type="text" name="subject" id="subject" class="form-control" placeholder="Input your subject here" required>
                     
                     <label for="comment">Comments</label>
                     <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="comment" required></textarea>
                   </div>
                        <div class="md-3">
                         <button type="submit" name="submitcontact" class="btn btn-primary" rows="3">Send Mail </button> 
                        </div>
                </form>
            </div>
         </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
      var massageText ="<?= $_SESSION['status'] ?? '' ?>";
      if(massageText !=''){
      Swal.fire({
  title: "thank you",
  text: massageText,
  icon: "success"
});
<?php unset($_SESSION['status']);   ?>
      }
     </script>
    </body>
</html>