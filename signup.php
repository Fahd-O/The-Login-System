<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">

               <h1>Sign Up</h1>

               <?php
                    if(isset($_GET['error']))
                    {
                        if($_GET['error'] == "emptyfields")
                        {
                            echo '<p class="signuperror">Fill in all fields !</p>';
                        }
                        elseif($_GET['error'] == "invaliduidmail")
                        {
                            echo '<p class="signuperror">Invalid username and e-mail !</p>';
                        }
                        elseif($_GET['error'] == "invaliduid")
                        {
                            echo '<p class="signuperror">Invalid username !</p>';
                        }
                        elseif($_GET['error'] == "invalidmail")
                        {
                            echo '<p class="signuperror">Invalid e-mail !</p>';
                        }
                        elseif($_GET['error'] == "passwordcheck")
                        {
                            echo '<p class="signuperror">Your passwords do not match !</p>';
                        }
                        elseif($_GET['error'] == "usertaken")
                        {
                            echo '<p class="signuperror">Username is already taken !</p>';
                        }
                    }
                    elseif($_GET['signup'] == "success")
                    {
                        echo '<p class="signupsuccess">Signup successful !</p>';
                    }
               ?>

               <form class="form-signup" action="includes/signup.inc.php" method="POST">

                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                
                <button type="submit" name="signup-submit">Sign up</button>

               </form>

            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>