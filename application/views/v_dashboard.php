<!--static chart-->
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="assets/js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <!-- <script src="assets/js/chartinator.js" ></script> -->
   
<!--geo chart-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<!-- Start Status area -->
<div class="notika-status-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
					<div class="website-traffic-ctn">
						<h2><span class="counter"><?=$this->fungsi->count_mahasiswa()?></span></h2>
						<p>Data Mahasiswa</p>
					</div>
					<div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
					<div class="website-traffic-ctn">
						<h2><span class="counter"><?=$this->fungsi->count_matakuliah()?></span></h2>
						<p>Data Matakuliah</p>
					</div>
					<div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
					<div class="website-traffic-ctn">
						<h2><span class="counter"><?=$this->fungsi->count_kehadiran()?></span></h2>
						<p>Data Kehadiran</p>
					</div>
					<div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
					<div class="website-traffic-ctn">
						<h2><span class="counter"><?=$this->fungsi->count_user()?></span></h2>
						<p>Data User</p>
					</div>
					<div class="sparkline-bar-stats4">4,2,8,2,5,6,3,8,3,5,9,5</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Status area-->
<!-- Start Sale Statistic area-->
<div class="sale-statistic-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-11 col-sm-10 col-xs-15">
				<div class="sale-statistic-inner notika-shadow mg-tb-30">
					<div id="chartContainer" style="height: 300px; width: 100%;"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Sale Statistic area-->

<script>
    var total1 = <?=$this->fungsi->count_mahasiswa()?>;
    var total2 = <?=$this->fungsi->count_matakuliah()?>;
    var total3 = <?=$this->fungsi->count_kehadiran()?>;
    var total4 = <?=$this->fungsi->count_user()?>;
	window.onload = function () 
	{
		CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#4EAd66",
                "#2CA0c7",
                "#EB6817",
                "#cd42ff"                
                ]);
 		var chart = new CanvasJS.Chart("chartContainer",
 		{
			colorSet: "greenShades",
		  	title: 
		  	{
				text: "Data Sistem Presensi Mahasiswa",
				dockInsidePlotArea: true
			},     
			data: 
			[
				{        
					type: "column",             
					dataPoints: 
					[
						{ label: "Data Mahasiswa", y: total1 }, 
						{ label: "Data Matakuliah", y: total2 }, 
						{ label: "Data Kehadiran", y: total3 }, 
						{ label: "Data User", y: total4 }, 
					]
				}
			]
 		});
 		chart.render();
	}
</script>