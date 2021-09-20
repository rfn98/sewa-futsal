<?php
  $sql = "SELECT * from jadwal";
  $hasil = mysqli_query($koneksi,$sql);
  // $data = mysqli_fetch_array($hasil);
?>
<div class="modal fade" id="myModalDeleteJadwal">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data lapangan ini ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <form method="POST">
          <input type="hidden" name="id_jadwal_delete" v-model="jadwalObj.id_jadwal">
          <button type="submit" name="delete_jadwal" class="btn btn-danger">Delete</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
        </form>
        <?php  
          if (isset($_POST['delete_jadwal'])) {
            $id_jadwal = $_POST['id_jadwal_delete'];
            $sql = "DELETE FROM jadwal WHERE id_jadwal = $id_jadwal";
            $query = mysqli_query($koneksi,$sql);
            echo "<script language='javascript'>window.location='opt_profil.php?url=jadwal';</script>";
          }
        ?>
      </div>
    </div>
  </div>
</div>

<div class="w3-container w3-card-2 w3-white w3-round" style="margin-left: 10px"><br>
	<div class="w3-row-padding" style="margin:0 -16px">        
    <!-- Advanced Tables -->
      <div class="panel panel-default">
          <div class="panel-heading">
               Tabel Jadwal&nbsp;<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalJadwal" v-on:click="jadwalObj = {}"><span class="glyphicon glyphicon-plus"></span>Tambah</a>
          </div>
          <div class="panel-body">
              <div class="table-responsive">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>Kode Lapangan</th>
                              <th>Jam</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php while($data = mysqli_fetch_array($hasil)) {?>
                        <tr>
                          <td><?php echo $data['id_lap'] ?></td>
                          <td><?php echo $data['jam'] ?></td>
                          <td>
                            <a href="#" v-on:click="jadwalObj = {
                              id_jadwal: <?php echo $data['id_jadwal'] ?>,
                              id_lap: '<?php echo $data['id_lap'] ?>',
                              jam: '<?php echo $data['jam'] ?>'
                            }" 
                            class='btn btn-primary btn-xs' data-target="#myModalJadwal" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>&nbsp
                            <a href="#" data-target="#myModalDeleteJadwal" data-toggle="modal" class="btn btn-danger btn-xs" onclick="setIdJadwal(<?php echo $data['id_jadwal'] ?>)"><i class="fa fa-trash"></i> Delete</a>
                          </td>
                        </tr>
                        <?php }?>
                      </tbody>
                  </table>	
              </div>      
        	</div>
      </div>
    </div>
  <!-- End Grid -->
  </div>