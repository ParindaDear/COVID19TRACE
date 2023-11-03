<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Covid19 Trace</title>
    <?php
        require_once 'function.php';
    ?>
  </head>
  <body>
    <h1>Covid19 Trace</h1>
    
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
            <div class="card-header">รวมผู้ติดเชื้อ</div>
            <div class="card-body">
              <h5 class="card-title"><?php print(getTotalConfirmed()); ?> ราย</h5>
              <p class="card-text">จำนวนผู้ติดเชื้อจากรายงานที่รวบรวมได้*</p>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card text-white bg-dark mb-3" style="max-width:18rem;">
            <div class="card-header">รวมผู้เสียชีวิต</div>
            <div class="card-body">
              <h5 class="card-title"><?php print(getTotalDeaths()); ?> ราย</h5>
              <p class="card-text">จำนวนผู้เสียชีวิตจากรายงานที่รวบรวมได้*</p>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card text-white bg-success mb-3" style="max-width:18rem;">
            <div class="card-header">รวมผู้รักษาหาย</div>
            <div class="card-body">
              <h5 class="card-title"><?php print(getTotalRecovered()); ?> ราย</h5>
              <p class="card-text">จำนวนผู้รักษาหายจากรายงานที่รวบรวมได้*</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ชื่อประเทศ</th>
          <th scope="col">เมือง</th>
          <th scope="col">ผู้ติดเชื้อ (คน)</th>
          <th scope="col">ผู้เสียชีวิต (คน)</th>
          <th scope="col">หายป่วยแล้ว (คน)</th>
        </tr>
      </thead>
      <tbody>
        <?php
          printTable();
        ?>
      </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
