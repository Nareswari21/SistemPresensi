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
                                        <h2>Tabel Data Matakuliah</h2>
										<p>Sistem <span class="bread-ntd">Presensi Mahasiswa</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <!-- <a href="#addEmployeeModal" class="btn"  data-toggle="modal" title="Tambah Daftar Matakuliah"><i class="notika-icon notika-plus-symbol"></i></a> -->
                                    <a href="<?php echo base_url().'matakuliah/export_excel/'; ?>" data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></a>
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
                                        <th>Name Course</th>
                                        <th>Schedule</th>
                                        <th>Lecturer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>   
                                    <?php 
                                        $no=1;
                                        foreach($datas as $b){ ?>
                                            <tr>
                                        <td><?php echo $b->id_course; ?></td>
                                        <td><?php echo $b->name_course; ?></td>
                                        <td><?php echo $b->schedule; ?></td>  
                                        <td><?php echo $b->lecturer; ?></td>  
                                        <td>
                                            <a href="#editEmployeeModal" class="edit"  data-toggle="modal" onclick="getData('<?php echo $b->id_course?>', '<?php echo $b->name_course?>', '<?php echo $b->schedule?>', '<?php echo $b->lecturer?>')"><i class="notika-icon notika-edit" data-toggle="tooltip" title="edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete"  data-toggle="modal" onclick="getID(<?php echo $b->id_course?>)"><i class="notika-icon notika-trash" data-toggle="tooltip" title="delete">&#xE872;</i></a>
                                        </td>
                                    <?php } ?>
                                        </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Name Course</th>
                                        <th>Schedule</th>
                                        <th>Lecturer</th>
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

<!-- <div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url(). 'matakuliah/tambah_aksi'; ?> "method="post">
            <div class="modal-header">            
                <h4 class="modal-title">TAMBAH DATA MATAKULIAH</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id_course" placeholder="id_course">
                </div>         
                <div class="form-group">
                    <label>Name Course</label>
                    <input type="text" class="form-control" name="name_course" placeholder="name_course" required="required">
                </div>
                <div class="form-group">
                    <label>Schedule</label>
                    <input type="datetime-local" class="form-control" name="schedule" placeholder="schedule" required="required">
                </div>
                <div class="form-group">
                    <label>Lecturer</label>
                    <input type="text" class="form-control" name="lecturer" placeholder="lecturer" required="required">
                </div>        
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-danger danger-icon-notika" value="Add">
            </div>
            </form>
        </div>
    </div>
</div> -->
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url(). 'matakuliah/hapus/' . $b->id_course?>?>" method="post">
                <div class="modal-header">                      
                    <h4 class="modal-title">HAPUS DATA MATAKULIAH</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="text" id="id_course" name="id_course" value=""/>
                    <p>Anda Yakin ingin Menghapus data matakuliah ini?</p>
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
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo form_open_multipart('matakuliah/update'); ?>
                <div class="modal-header">            
                  <h4 class="modal-title">EDIT DATA</h4>
                </div>
                <div class="form-group alert">
                    <label>Id Course</label>
                    <input type="text" class="form-control" id="id_course1" name="id_course" value="" placeholder="id_course" required="required">
                </div>       
                <div class="form-group alert">
                    <label>Name _Cours</label>
                    <input type="text" class="form-control" id="name_course" name="name_course" value="" placeholder="name_course" required="required">
                </div>
                <div class="form-group alert">
                    <label>Schedule</label>
                    <input type="datetime-local" class="form-control" id="schedule" name="schedule" value="" placeholder="schedule" required="required">
                </div>
                <div class="form-group alert">
                    <label>Lecturer</label>
                    <input type="text" class="form-control" id="lecturer" name="lecturer" value="" placeholder="lecturer" required="required">
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-danger danger-icon-notika" value="Edit">
                </div>
            <?php ?>
        </div>
    </div>
</div>

<script>
    function getID(data){
        document.getElementById("id_course").value = data;
    }
</script>
<script>
    function getData(id_course, name_course, schedule, lecturer){
        document.getElementById("id_course1").value = id_course;
        document.getElementById("name_course").value = name_course;
        document.getElementById("schedule").value = schedule;
        document.getElementById("lecturer").value = lecturer;
    }
</script>