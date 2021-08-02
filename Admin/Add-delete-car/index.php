<?php
include("./../../template/nav-admin.php");
include("./../../Database/config.php");

$sql = "
SELECT car.*, location.state, location.region FROM car inner join location on car.location_id = location.id";
// echo $find_car;


$num_row = 0;


?>
 
    <div class="container ms-5 ps-5">
        <main class="m-2 ms-5 ps-4 my-5 py-3">
            <div class="ms-4 ps-4">
            <div class="container">
                <div class="row my-3">
                    <div class="col">
                        <h4>Charts</h4>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-6 py-1">
                        <div class="card shadow">
                            <div class="card-body">
                                <canvas id="chLine"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="card shadow">
                            <div class="card-body">
                                <canvas id="chBar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row py-2">
                    <div class="col-md-4 py-1">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chDonut1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-1">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chDonut2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-1">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chDonut3"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        
        
        
                <?php
        
        
                        ?>
        
        
                        <div class="container">
                        <h4 class="my-4">List of all cars</h4>
        
                        <div class="card shadow my-2" style="max-width: 100%;">
                          <div class="card-body table-responsive">
        
        
        
        
                            <table class="table table-border table-hover data-table">
                            <thead>
                            <th scope="col">No</th>
                                <th scope="col">Plate Number</th>
                                <th scope="col">Model</th>
                                <th scope="col">Type</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Mileage</th>
                                <th scope="col">Color</th>
                                <th scope="col">State</th>
                                <th scope="col">Region</th>
                                <th scope="col">Availability</th>
                                <th scope="col">Actions</th>
                            </thead>
                            <tbody>
                                <?php
        
        
        
        
                                    // echo $sql;
        
                                $result = mysqli_query($con, $sql);
        
                                $row = mysqli_fetch_array($result) ;
        
                                if($result = mysqli_query($con, $sql)){
                                    if(mysqli_num_rows($result) > 0){
                                    while($car = mysqli_fetch_array($result)){ $num_row++;
                                ?>
        
                                <tr>
                                    <th><?php echo $num_row; ?></th>
                                    <?php
        
                                    //echo $student_assignment_answer;
                                    //echo "<br>" . $student_assignment_answer;
        
        
        
                                        ?>
                                        <td><?php echo $car['plate_no']; ?></td>
                                        <td><?php echo $car['model']; ?></td>
                                        <td><?php echo $car['type']; ?></td>
                                        <td><?php echo $car['brand']; ?></td>
                                        <td><?php echo $car['rate']; ?></td>
                                        <td><?php echo $car['mileage']; ?></td>
                                        <td><?php echo $car['color']; ?></td>
                                        <td><?php echo $car['state']; ?></td>
                                        <td><?php echo $car['region']; ?></td>
                                        <?php
                                        if($car['availability'] == "booked"){
                                          ?>
                                          <td><span class="badge bg-success"><?php echo $car['availability']; ?></span></td>
                                          <?php
                                        }else{
                                          ?>
                                          <td><span class="badge bg-secondary"><?php echo $car['availability']; ?></span></td>
                                          <?php
                                        }
                                        
                                        ?>
                                        
                                        <td class="text-center">
        
                                    <button class="btn btn-light dropdown float-right" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                        </svg>
                                    </button>
        
                                    <ul class="dropdown-menu bg-outline-secondary" aria-labelledby="dropdownMenuLink">
                                    
                                        <li><h6 class="dropdown-header">Actions</h6></li>
                                        <li><hr class="dropdown-divider-dark"></li>
        
                                        <!-- <li><a class="dropdown-item "  href=""  target="_blank" > Update</a></li> -->
                                        <li><a class="dropdown-item text-success"  href="delete.php?id=<?php echo $car['id'];?>">Delete</a></li>
        
        
                                    </ul>
        
                                    </td>
        
        
        
        
                                </tr>
                                <?php }}}?>
        
                              </tbody>
                              </table>
        
                            </div>
                             <div class="card-footer">
                            <div class="d-flex justify-content-right">
                              <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Add a car
                              </button>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Add a car</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="add.php" method="POST">
                                      <div class="modal-body">
                                        <div class="form-floating mb-3">
                                          <input type="text" name="plate_no" class="form-control" id="text" placeholder="..">
                                          <label for="floatingInput">Plate Number</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input type="text" name="model" class="form-control" id="text" placeholder="..">
                                          <label for="floatingInput">Model</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input type="text" name="type" class="form-control" id="text" placeholder="..">
                                          <label for="floatingInput">Type</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input type="text" name="brand" class="form-control" id="text" placeholder="..">
                                          <label for="floatingInput">Brand</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input type="text" name="rate" class="form-control" id="text" placeholder="..">
                                          <label for="floatingInput">Rate</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input type="text" name="mileage" class="form-control" id="text" placeholder="..">
                                          <label for="floatingInput">Mileage</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input type="text" name="color" class="form-control" id="text" placeholder="..">
                                          <label for="floatingInput">Color</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input type="text" name="state" class="form-control" id="text" placeholder="..">
                                          <label for="floatingInput">State</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input type="text" name="region" class="form-control" id="text" placeholder="..">
                                          <label for="floatingInput">Region</label>
                                        </div>
                                        
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                    
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        
                        
                        </div>

                       
        
        
        
                        </div>
            </div>
        
        
        
                    <?php
        
            ?>
        
        
        
        
        </main>
    </div>

    <script>
    
    /* chart.js chart examples */

// chart colors
var colors = ['#007bff','#28a745','#333333','#c3e6cb','#dc3545','#6c757d'];

/* large line chart */
    const ctx = document.getElementById("chLine").getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["sunday", "monday", "tuesday",
          "wednesday", "thursday", "friday", "saturday"],
          datasets: [{
            label: 'Last week',
            backgroundColor: 'rgba(161, 198, 247, 1)',
            borderColor: 'rgb(47, 128, 237)',
            data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
              }
            }]
          }
        },
      });

/* large pie/donut chart */
var chPie = document.getElementById("chPie");
if (chPie) {
  new Chart(chPie, {
    type: 'pie',
    data: {
      labels: ['Desktop', 'Phone', 'Tablet', 'Unknown'],
      datasets: [
        {
          backgroundColor: [colors[1],colors[0],colors[2],colors[5]],
          borderWidth: 0,
          data: [50, 40, 15, 5]
        }
      ]
    },
    plugins: [{
      beforeDraw: function(chart) {
        var width = chart.chart.width,
            height = chart.chart.height,
            ctx = chart.chart.ctx;
        ctx.restore();
        var fontSize = (height / 70).toFixed(2);
        ctx.font = fontSize + "em sans-serif";
        ctx.textBaseline = "middle";
        var text = chart.config.data.datasets[0].data[0] + "%",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;
        ctx.fillText(text, textX, textY);
        ctx.save();
      }
    }],
    options: {layout:{padding:0}, legend:{display:false}, cutoutPercentage: 80}
  });
}

/* bar chart */
var chBar = document.getElementById("chBar");
if (chBar) {
  new Chart(chBar, {
  type: 'bar',
  data: {
    labels: ["S", "M", "T", "W", "T", "F", "S"],
    datasets: [{
      label: 'Myvi',
      data: [589, 445, 483, 503, 689, 692, 634],
      backgroundColor: colors[0]
    },
    {
        label: 'Persona',
      data: [639, 465, 493, 478, 589, 632, 674],
      backgroundColor: colors[1]
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        barPercentage: 0.4,
        categoryPercentage: 0.5
      }]
    }
  }
  });
}

/* 3 donut charts */
var donutOptions = {
  cutoutPercentage: 85, 
  legend: {position:'bottom', padding:5, labels: {pointStyle:'circle', usePointStyle:true}}
};

// donut 1
var chDonutData1 = {
    labels: ['Bootstrap', 'Popper', 'Other'],
    datasets: [
      {
        backgroundColor: colors.slice(0,3),
        borderWidth: 0,
        data: [74, 11, 40]
      }
    ]
};

var chDonut1 = document.getElementById("chDonut1");
if (chDonut1) {
  new Chart(chDonut1, {
      type: 'pie',
      data: chDonutData1,
      options: donutOptions
  });
}

// donut 2
var chDonutData2 = {
    labels: ['Wips', 'Pops', 'Dags'],
    datasets: [
      {
        backgroundColor: colors.slice(0,3),
        borderWidth: 0,
        data: [40, 45, 30]
      }
    ]
};
var chDonut2 = document.getElementById("chDonut2");
if (chDonut2) {
  new Chart(chDonut2, {
      type: 'pie',
      data: chDonutData2,
      options: donutOptions
  });
}

// donut 3
var chDonutData3 = {
    labels: ['Angular', 'React', 'Other'],
    datasets: [
      {
        backgroundColor: colors.slice(0,3),
        borderWidth: 0,
        data: [21, 45, 55, 33]
      }
    ]
};
var chDonut3 = document.getElementById("chDonut3");
if (chDonut3) {
  new Chart(chDonut3, {
      type: 'pie',
      data: chDonutData3,
      options: donutOptions
  });
}

/* 3 line charts */
var lineOptions = {
    legend:{display:false},
    tooltips:{interest:false,bodyFontSize:11,titleFontSize:11},
    scales:{
        xAxes:[
            {
                ticks:{
                    display:false
                },
                gridLines: {
                    display:false,
                    drawBorder:false
                }
            }
        ],
        yAxes:[{display:false}]
    },
    layout: {
        padding: {
            left: 6,
            right: 6,
            top: 4,
            bottom: 6
        }
    }
};

var chLine1 = document.getElementById("chLine1");
if (chLine1) {
  new Chart(chLine1, {
      type: 'line',
      data: {
          labels: ['Jan','Feb','Mar','Apr','May'],
          datasets: [
            {
              backgroundColor:'#ffffff',
              borderColor:'#ffffff',
              data: [10, 11, 4, 11, 4],
              fill: false
            }
          ]
      },
      options: lineOptions
  });
}
var chLine2 = document.getElementById("chLine2");
if (chLine2) {
  new Chart(chLine2, {
      type: 'line',
      data: {
          labels: ['A','B','C','D','E'],
          datasets: [
            {
              backgroundColor:'#ffffff',
              borderColor:'#ffffff',
              data: [4, 5, 7, 13, 12],
              fill: false
            }
          ]
      },
      options: lineOptions
  });
}

var chLine3 = document.getElementById("chLine3");
if (chLine3) {
  new Chart(chLine3, {
      type: 'line',
      data: {
          labels: ['Pos','Neg','Nue','Other','Unknown'],
          datasets: [
            {
              backgroundColor:'#ffffff',
              borderColor:'#ffffff',
              data: [13, 15, 10, 9, 14],
              fill: false
            }
          ]
      },
      options: lineOptions
  });
}

    
    </script>