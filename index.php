<form action=".php" method="POST">
                   <div class="mb-3">
                    <label for="name">Full Name</label>
                     <input type="text" name="name" id="name" placeholder="ibheetech" require>
                     
                     <label for="email">Email address</label>
                     <input type="email" name="email" id="email" placeholder="name@example.com" require>
                    
                     <label for="subject">Subject</label>
                     <input type="text" name="subject" id="subject" placeholder="Input your subject here" require>
                     
                     <label for="comment">Comments</label>
                     <textarea name="comment" placeholder="Leave a comment here" id="comment" require></textarea>
                   </div>
                        <div class="mt-3">
                         <buttony type="submit" name="submitcontact" class="btn btn-primary">Send Mail</button> 
                        </div>
                </form>