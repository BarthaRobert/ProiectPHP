<?php
    session_start();
    if(!isset($_SESSION['login_user']))
    header('Location: \BloodBankPHPLAB\login.php');

    include "components/header.php";
    include "src/dbconnect.php";

    $sql = "SELECT * FROM request";
    $result = mysqli_query($con,$sql);
    if(! $result ) {
        header('Location: \BloodBankPHPLAB\error.php');
    }
    
?>
<div class="cover">
</div>

<div class="container">
    <h1 class="heading-reg">Cereri</h1>
    
    <?php while($row = mysqli_fetch_array($result)) : ?>
        <div class="row">
            <div class="container request">
                <div class="col-md-2 blood">
                    <?php echo $row['bgroup']; ?>
                </div>
                <div class="col-md-5 contact">
                    <table class="myTable">
                        <tr>
                            <td class="table_row">Numele pacientului</td>
                            <td><?php echo $row['pName']; ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Numele spitalului</td>
                            <td><?php echo $row['hName']; ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Adresa spitalului</td>
                            <td><?php echo $row['haddress']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-5 contact">
                    <table class="myTable">
                        <tr>
                            <td class="table_row">Orasul</td>
                            <td><?php echo $row['city']; ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Numele doctorului</td>
                            <td><?php echo $row['dName']; ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Contact</td>
                            <td><?php echo $row['cName']; ?>  <?php echo $row['cNumber']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php endwhile;?>
    
    <div class="spacer"></div>
    <div class="spacer"></div>
</div>


<?php
    include "components/footer.php";
?>
