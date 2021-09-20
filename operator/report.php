<div class="w3-container w3-card-2 w3-white w3-round" style="margin-left: 10px"><br>
        <h4>Laporan Pemesanan</h4>
        <div class="row">
          <div class="col-md-4">
            <input class="form-control" type="date" id="date_start">
          </div>
          <div class="col-md-4">
            <input class="form-control" type="date" id="date_end" onchange="getListReport()">
          </div>
          <div class="col-md-4">
            <button class="btn btn-sm btn-success" onclick="printPdf()">Cetak Laporan</button>
          </div>
        </div>
        <hr class="w3-clear">
          <div class="w3-row-padding" style="margin:0 -16px">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Transaksi</th>
                                            <th>Tanggal Main</th>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                            <th>Total Bayar</th>
                                            <th width="10px">Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="item in listReport">
                                         <td>{{item.tgl_transaksi}}</td>
                                         <td>{{item.tgl_main}}</td>
                                         <td>{{item.jam_mulai}}</td>
                                         <td>{{item.jam_berakhir}}</td>
                                         <td>{{item.total_harga}}</td>
                                         <td>{{item.jenis_bayar == 'cod' ? 'COD' : 'Transfer'}}</td>
                                        </tr>
                                    </tbody>
                                    <!-- <tbody>
                                    <?php
                                        $sql_sel = "select *, DATE(tgl_book) tgl_transaksi from transaksi where status='Selesai'";
                                            // $sql_sel = "select * from transaksi where (status='Selesai' || status='Dibatalkan') and username_member='$username'";
                                            $query_sel = mysqli_query($koneksi,$sql_sel);
                                            while($sql_res = mysqli_fetch_array($query_sel)){
                                                                                
                                        ?>
                                              <tr>
                                                
                                                 <td><?php echo $sql_res['tgl_transaksi']; ?></td>
                                                 <td><?php echo $sql_res['tgl_main']; ?></td>
                                                 <td><?php echo $sql_res['jam_mulai']; ?></td>
                                                 <td><?php echo $sql_res['jam_berakhir']; ?></td>
                                                 <td><?php 
                         $s = mysqli_query($koneksi,"select lapangan.*, operator.* from lapangan inner join operator on lapangan.username=operator.username where id_lap='$sql_res[id_lap]'");
                         $p = mysqli_fetch_array($s);
                         echo "$p[nama_futsal] ($p[no_lap])"; ?></td>
                                                 <td><?php echo $sql_res['total_harga']; ?></td>
                                                 <td><?php echo $sql_res['jenis_bayar'] == 'cod' ? 'COD' : 'Transfer'; ?></td>
                                                 
                                                  
                                                 </tr>
                                      <?php } ?>
                                    </tbody> -->
                                </table>
        </div>
      </div>
        </div>
      </div>