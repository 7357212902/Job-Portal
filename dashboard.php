<?php include 'header.php'?>
<!-- Page content -->
<div class="content">
    <p>
        <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">  
    Link with href 
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Post Job
</button>

    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="company name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="" name="cname">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPosition" class="form-label">Position</label>
                    <input type="text" class="form-control" id="exampleinputposition" name="pos">

                </div>
                <div class="mb-3">
                    <label for="jobdesc" class="form-label">Job Description</label>
                    <input type="text" class="form-control" id="JobDesc">
                    <!-- <textarea name="" id="" cols="30" rows="10" class="form-control" name="jdesc"></textarea> -->
                </div>
                <!-- <div class="mb-3">
                    <label for="skills" class="form-label">Skills Required</label>
                    <input type="text" class="form-control" id="skills " name="skills">
                </div> -->
                <div class="mb-3">
                    <label for="ctc" class="form-label">CTC</label>
                    <input type="text" class="form-control" id="CTC" name="CTC">
                </div>
                <button type="submit" class="btn btn-primary" name="job">Submit</button>
            </form>
        </div>

    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">company name</th>
                <th scope="col">Position</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>TCS</td>
                <td>Software Developer</td>
                <td>8LPA</td>
            </tr>
        </tbody>

        <?php
    $sql='SELECT `cname`,`position`,`CTC` FROM `jobs`';
    $result=mysqli_query($conn,$sql);
    $i=0;
    if ($result->num_rows>0) {
      while ($row=$result->fetch_assoc()) {
        echo";
        <tbody>
        <tr>
        <td>".++$i."</td>
        <td>".$row['cname']."</td>
        <td>".$row['position']."</td>
        <td>".$row['CTC']."</td>
        </tr>";
      }
      
    }
    else{
      echo"";
    }
    ?>
        </tbody>

    </table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>