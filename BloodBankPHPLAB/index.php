<?php
    session_start();
    include "components/header.php";
?>
    <!-- Banner Section -->
    <div class="banner">
        <img src="images/banner.jpg" alt="banner"/>
    </div>
    <!-- Banner Section Ends -->

    <!-- Description Section -->
    <div class="container">
        <div class="col-md-8 main-section">
            <h2>Misiunea noastra</h2>
            <p>
                Pentru a putea face fata cererii de sange , avem nevoie de cat mai multe persoane
                voluntare sa doneze sange. Toti voluntarii impart acelasi lucru - un spirit generos, o dorinta
                de a oferi comunitatii ajutorul necesar.
                Foarte multe interventii medicale necesita o transfuzie de sange , care nu ar fi posibila fara cantitatea de sange donat.
            </p>
            <p class="note">
                <strong>La fiecare doua secunde , o persoana primeste o cantitate de sange. Nevoia este constanta.
                    Este misiunea noastra sa satisfacem aceasta nevoie.</strong>
            </p>
            <div class="spacer"></div>
        </div>
        <div class="col-md-4">
           <div class="sidebar">
               <img src="images/poster.jpg" alt="Blood Donation"/>
           </div>
        </div>
    </div>
    <!-- Description Section Ends -->


    <!-- Modal -->
  <div class="modal fade" id="SignUpModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Inregistrare</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="classes/register.php" onSubmit="return Validate()">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" name="username" type="email" class="form-control" placeholder="Email">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" name="password" type="password" class="form-control" placeholder="Parola">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="cpassword" onKeyUp="Validate();" name="cpassword" type="password" class="form-control" placeholder="Confirmare parola">
            </div>
            <br>
            <div class="input-group">
                <span class="error" id="perror"></span>
            </div>
            <br>
            <div class="input-group">
                <input type="submit" value="Inregistrare" name="submit" class="btn btn-success">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
        </div>
      </div>
      
    </div>
  </div>

      <!-- Modal -->
    <div class="modal fade" id="LoginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Autentificare</h4>
        </div>
        <div class="modal-body">
        <form method="POST" action="classes/login.php">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" name="password" type="password" class="form-control" name="password" placeholder="Parola">
            </div>
            <br>
            <div class="input-group">
                <input type="submit" value="Autentificare" name="login" class="btn btn-success" name="msg" placeholder="Additional Info" >

            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
        </div>
      </div>
      
    </div>
  </div>

<?php
    include "components/footer.php";
?>

<script>
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("cpassword").value;
        if (password != confirmPassword) {
            document.getElementById('perror').innerHTML = "Parola nu se potriveste";
            return false;
        }
        else {
            document.getElementById('perror').innerHTML = "";
            return true;
        }
    }
</script>
