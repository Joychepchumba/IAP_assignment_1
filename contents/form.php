<?php
class form{
    public function sign_up(){
        ?>
        <div class="container">
            <div class="row">
        <div class="col-md-6" >
    
        

        
        <legend>Disabled fieldset example</legend>
        <div class="row align-items-md-stretch">
        <div class="col-md-9">
          <div class="h-100 p-5 text-bg-dark rounded-3">
            <h2>Sign Up</h2>
            <form action="" method="POST" enctype="multipart/form-data">
            <fieldset>    
            <div class="mb-3">
                    <label for="fullname" class="form-label">Fullname:</label>
                    <input type="text" name="fullname" class="form-control form-control-lg" maxlength="50" id="fullname" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email_address" class="form-label">Email Address:</label>
                    <input type="email" name="email_address" class="form-control form-control-lg" maxlength="50" id="email_address" placeholder="Enter your email address">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" name="username" class="form-control form-control-lg" maxlength="50" id="username" placeholder="Enter your username">
                </div>
                <button type="submit" name="signup" class="btn btn-danger">Submit</button>
                </fieldset>  
            </form>
          </div>
        </div>
     
       

        
        
           
    </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
        <?php
    }
}