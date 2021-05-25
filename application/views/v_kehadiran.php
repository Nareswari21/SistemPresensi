	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Tabel Kehadiran Mahasiswa</h2>
										<p>Sistem <span class="bread-ntd">Presensi Mahasiswa</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <!-- <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button> -->
                                    <a href="<?php echo base_url().'kehadiran/export_excel/'; ?>" data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <!-- <div class="basic-tb-hd">
                            <h2>Basic Example</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div> -->
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Time Stamp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>   
                                    <?php foreach($datas as $b){ ?>
                                        <tr>
                                        <td><?php echo $b->id_attendance; ?></td>
                                        <td><?php echo $b->name; ?></td>
                                        <td><?php echo $b->name_course; ?></td>
                                        <td><?php echo $b->time_stamp; ?></td>  
                                        <td>
                                            <a href="#deleteEmployeeModal" class="delete"  data-toggle="modal" onclick="getID(<?php echo $b->id_attendance?>)"><i class="notika-icon notika-trash" data-toggle="tooltip" title="delete">&#xE872;</i></a>
                                        </td>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Time Stamp</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url(). 'kehadiran/hapus/' . $b->id_attendance?>?>" method="post">
                <div class="modal-header">                      
                    <h4 class="modal-title">HAPUS KEHADIRAN MAHASISWA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">            
                    <input type="text" id="id_attendance" name="id_attendance" value=""/>
                    <p>Anda Yakin ingin Menghapus kehadiran mahasiswa ini?</p>
                    <p class="text-warning"><small>aksi ini tidak bisa di ulangi</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger danger-icon-notika" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function getID(data){
        document.getElementById("id_attendance").value = data;
    }
</script>