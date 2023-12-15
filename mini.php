<?php
require_once("project.php");
session_start();

$serialno = 1;
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
      margin: 0;
      padding: 0;
      background-image: url('https://www.shutterstock.com/image-vector/insert-atm-card-credit-slot-600nw-1940138038.jpg'); /* Replace with the actual path to your image */
      background-size: 100%;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
        }
        .Login {
            background-color: transparent;
            height: 100vh;
            width:100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

       

        
    </style>
</head>

<body>
<div class="container-fluid Login">
    <div class="card MainLogin" style="width: 28rem; height: 38rem;">
        <div class="card-body abc"><br><br><br>
        <?php
      $currentDate =date('l,F j,Y');
      echo "$currentDate";
      ?>
            <h3 class="card-title text-center">Mini Statement</h3>
           
            <table class="table table-striped" id="sortableTable">
                <thead>
                    <tr>
                        <th data-type="number">TRANS.NUM</th>
                        <th data-type="number">DEPOSIT AMOUNT</th>
                        <th data-type="number">WITHDRAW AMOUNT</th>
                        <th data-type="date">DATE&TIME</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $qry = mysqli_query($conn, "SELECT * FROM transactions WHERE status = '1' ORDER BY create_date_time DESC LIMIT 5") or
                    die(mysqli_error($conn));
                    while ($res = mysqli_fetch_object($qry)) {
                        ?>
                        <tr>
                            <td><?php echo $serialno++; ?></td>
                            <td><?php echo $res->deposit; ?></td>
                            <td><?php echo $res->withdraw; ?></td>
                            <td><?php echo $res->create_date_time; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table><br>
            <div class="position-absolute start-50 translate-middle ">
                <form action="http://localhost/gayathri/trans.php"><br><br><br>
                    <button type="submit" class="btn btn-primary">Exit</button>
        
                    
                </form>
                
                    </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#sortableTable th').click(function () {
            var table = $('#sortableTable');
            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()));
            this.asc = !this.asc;
            if (!this.asc) {
                rows = rows.reverse();
            }
            for (var i = 0; i < rows.length; i++) {
                table.append(rows[i]);
            }
        });

        function comparer(index) {
            return function (a, b) {
                var valA = getCellValue(a, index);
                var valB = getCellValue(b, index);
                return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB);
            };
        }

        function getCellValue(row, index) {
            return $(row).children('td').eq(index).text();
        }
    });

</script>




<script>
function printDiv(printId) {
    var printContents = document.getElementById(printId).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    

    window.print();
    document.body.innerHTML = originalContents;
    
}
</script>
</body>
</html>