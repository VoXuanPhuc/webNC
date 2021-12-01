
<?php 
	$conn;
	//Thong so ket noi CSDL
	$severname ="localhost"; 
	$username ="root";
	$password ="admin1234"; 
	$db_name ="baeshop";

	//Tao ket noi CSDL
	$conn = new mysqli($severname,$username,$password,$db_name);
	$conn->set_charset("utf8");

	//check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $this->conn->connect_error);
	}
?>
 <?php
  	$sql = 
	  "select DATE_FORMAT(NgayLap, '%c') as Thang, sum(TongTien) as Tongtien
        from hoadon
        group by Thang";
  		$result = mysqli_query($conn, $sql);
 ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
		
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
		  
          <?php
			while($chart = mysqli_fetch_assoc($result))
				{
					echo "['Thang ".$chart['Thang']."',".$chart['Tongtien']."],"; 
				} 
			?>
			]);
        var options = {
          title: 'Thống kê tỷ số danh thu của từng tháng trong năm'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>

 <!-- Begin Page Content -->
 <div class="container-fluid">
	 <div id="piechart" style="width: 900px; height: 500px;"></div>

   <div class="row">

     <!-- Earnings (Monthly) Card Example -->

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tổng danh thu trong năm</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($data_countM['Count']) ?> VNĐ</div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Khách hàng</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_nguoidung['Count'] ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-calendar fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sản phẩm</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$data_tksp1['Count']?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Danh mục</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_hd['Count'] ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-comments fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

 </div>
 <!-- /.container-fluid -->