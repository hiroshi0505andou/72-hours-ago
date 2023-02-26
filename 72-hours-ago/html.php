<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>72-hours ago</title>
  </head>
<style>
  body{
    background-color: snow;
  }
  .card{
    top: 200px;
  }
  .card-header{
    background-color: lightsteelblue;
  }
  .card-footer{
    background-color: lightsteelblue;
  }


</style>
  <body>
     <div class="card w-25 mx-auto">
          <div class="card-header">
              <h3 class="text-center"><i class="fa-solid fa-plane"></i>フライト予定<i class="fa-solid fa-plane"></i></h3>
          </div>
          <div class="card-body  border border-5">
              <form action="" method="post">
                    <div class="row mt-4">
                          <div class="col">
                                <input type="date" name="day" id="day" class="w-100">
                          </div>
                          <div class="col">
                                <input type="time" name="time" id="time" class="w-100">
                          </div>
                      </div>
                  <button type="submit" name="btn_submit" class="btn btn-primary w-100 mt-3 mb-4">調べる</button>
            </form>
          </div>
          <div class="card-footer pt-4">
                <?php
                if (isset($_POST['btn_submit'])) {
                  $day = $_POST['day'];
                  $time = $_POST['time'];
                  echo "<h6 class='text-center'>";
                  echo "PCR検査を";
                  echo date('Y/m/d H:i',strtotime($day . ' ' . $time . '-72hours'));
                  echo "以降で受けてください。";
                  echo "</h6>";
                }
                ?>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
