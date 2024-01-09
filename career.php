<!DOCTYPE html>
<html lang="en">
  <?php include 'config.php'?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./career.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>career</title>
</head>

<body>
    <!-- <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed; margin: top 0px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div> -->
            <img src="heroimg.jpg" alt="" class="img-fluid" width="1900">
            <div class="row">
              <div class="col-12">
            <div class="jumbotron jumbotron-fluid" style="background-image: url('heroimg.jpg'); background-size:cover;">

                <div class="container">
                    <h1 class="display-4">job portal</h1>
                    <p class="lead">best jobs available matching your skills</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php $sql="SELECT `id`,`cname`,`position`,`jdesc`,`skills`,`CTC` FROM `jobs`";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        echo'
        <div class="col-md-4">
        <div class="jobs">
        <h3 style="text-align:center;">'.$row['position'].'</h3>
        <h4 style="text-align:center;">'.$row['cname'].'</h4>
        <p style="color:black; text-align:justify;">'.$row['jdesc'].'</p>
        <p style="color:black;"><b>skills required:</b>'.$row['skills'].'</p>
        <p style="color:black;"><b>CTC:</b>'.$row['CTC'].'</p> 
        <button class="btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
        apply now
        </button>
        
        
        </div>
        </div>';
      }
    }
    ?>
    <div class="modal fade" id="examplemModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">apply for jobs</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">applying for</label>
            <input type="text" class="form-control" name="apply"> 
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">year passout</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">apply</button>
        </form>
      </div>
    </div>
  </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>