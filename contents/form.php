<?php
// Define a class named 'form'
class form {
    // Method to render the sign-up form
    public function sign_up() {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Legend for the form -->
                    <legend>Disabled fieldset example</legend>
                    <div class="row align-items-md-stretch">
                        <div class="col-md-9">
                            <div class="h-100 p-5 text-bg-dark rounded-3">
                                <h2>Sign Up</h2>
                                <!-- Start of the sign-up form -->
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <fieldset>    
                                        <!-- Input for Fullname -->
                                        <div class="mb-3">
                                            <label for="fullname" class="form-label">Fullname:</label>
                                            <input type="text" name="fullname" class="form-control form-control-lg" maxlength="50" id="fullname" placeholder="Enter your name">
                                        </div>
                                        <!-- Input for Email Address -->
                                        <div class="mb-3">
                                            <label for="email_address" class="form-label">Email Address:</label>
                                            <input type="email" name="email_address" class="form-control form-control-lg" maxlength="50" id="email_address" placeholder="Enter your email address">
                                        </div>
                                        <!-- Input for Username -->
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username:</label>
                                            <input type="text" name="username" class="form-control form-control-lg" maxlength="50" id="username" placeholder="Enter your username">
                                        </div>
                                        <!-- Submit button -->
                                        <button type="submit" name="signup" class="btn btn-danger">Submit</button>
                                    </fieldset>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/sign_up_2.jpeg" alt="">
                </div>
            </div>
        </div>
        <!-- Bootstrap JS for functionality -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
        <?php
    }
}
