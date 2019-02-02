<?php
    session_start();
    if(!isset($_SESSION['login_user']))
        header('Location: \BloodBankPHPLAB\login.php');

    include "components/header.php";
    include "src/dbconnect.php";

?>
<div class="cover">
</div>

<div class="container">
    <h1 class="heading-reg">Cerere sange</h1>
    <form action="src/request.php" method="post">
        <div class="row form-row">
            <div class="col-md-6">
                <label for="FirstName">Numele pacientului</label>
                <input type="text" name="pname" required class="form-control" id="pName" aria-describedby="FirstName" placeholder="Numele pacientului">
                </div>
            <div class="col-md-6">
                <label for="LastName">Numele spitalului</label>
                <input type="text" name="hname" required class="form-control" id="hName" aria-describedby="LastName" placeholder="Numele spitalului">
            </div>
        </div>
        <div class="spacer"></div>
        <div class="form-row row">
            <div class="col-md-12">
                <label for="StreetAddress">Adresa spitalului</label>
                <input type="text" name="haddress" required class="form-control" id="StreetAddress" aria-describedby="StreetAddress" placeholder="Adresa spitalului">
            </div>
        </div>
        <div class="spacer"></div>
        <div class="row form-row">
            <div class="col-md-6">
                <label for="city">Orasul</label>
                <input type="text" name="city" required class="form-control" id="city" placeholder="Orasul">
                </div>
            <!-- <div class="col-md-6">
                     <label for="state">Doctor Name</label>
                     <input type="text" name="dName" required class="form-control" id="state" placeholder="Doctor Name">
                 </div> -->
         </div>
         <div class="spacer"></div>
         <div class="row form-row">
             <div class="col-md-6">
             <label for="bgroup">Grupa de sange</label>
                 <select name="bgroup" class="form-control" id="bgroup">
                     <option value="A+">A+</option>
                     <option value="B+">B+</option>
                     <option value="AB+">AB+</option>
                     <option value="O+" >O+</option>
                     <option value="A-" >A-</option>
                     <option value="B-" >B-</option>
                     <option value="AB-">AB-</option>
                     <option value="O-">O-</option>
                 </select>
             </div>
         </div>

         <h1 class="heading-reg">Datele de contact</h1>

         <div class="spacer"></div>
         <div class="row form-row">
             <div class="col-md-6">
                 <label for="PostalCode">Nume de contact</label>
                 <input type="text" name="cName" required class="form-control" id="PostalCode" aria-describedby="PostalCode" placeholder="Nume de contact">
             </div>
             <div class="col-md-6">
                 <label for="Country">Numar de contact </label>
                 <input type="number" name="cNumber" required class="form-control" id="Country" aria-describedby="Country" placeholder="Numar de contact">
             </div>
         </div>

         <div class="spacer"></div>
         <div class="row">
             <div class="col-md-12">
                 <input type="submit" name="submit" value="Cere sange" class="btn btn-danger">
             </div>
         </div>
         <div class="spacer"></div>
       </div>
     </form>
 </div>


<?php
    include "components/footer.php";
?>