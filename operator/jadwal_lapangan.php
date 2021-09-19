<?php
  $sql = "SELECT * from jadwal";
  $hasil = mysqli_query($koneksi,$sql);
  // $data = mysqli_fetch_array($hasil);
?>
<div class="w3-container w3-card-2 w3-white w3-round" style="margin-left: 10px"><br>
	<div class="w3-row-padding" style="margin:0 -16px">        
    <!-- Advanced Tables -->
      <div class="panel panel-default">
          <div class="panel-heading">
               Tabel Jadwal&nbsp;<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalJadwal"><span class="glyphicon glyphicon-plus" v-on:click="jadwalObj = {}"></span>Tambah</a>
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
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
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