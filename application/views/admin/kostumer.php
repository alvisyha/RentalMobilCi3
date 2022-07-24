<div class="site-main">
    <div class="page-header">
        <h3>Data Kostumer</h3>
    </div>
    <a href="<?php echo base_url('admin/kostumer_add')?>" class="btn btn-primary btn-sm">
        <span class="glyphicon-plus"></span>
        Kostumer Baru
    </a>
    <br/>
    <br/>
    <div class="table-responsive">
        <table id= "table-datatable" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>HP</th>
                    <th>No. KTP</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach($kostumer as $k){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $k->kostumer_nama?></td>
                    <td><?php echo $k->kostumer_jk?></td>
                    <td><?php echo $k->kostumer_alamat?></td>
                    <td><?php echo $k->kostumer_hp?></td>
                    <td><?php echo $k->kostumer_ktp?></td>
                    <td>
                        <a href="<?php echo base_url().'admin/kostumer_edit/'.$k->kostumer_id;?>" class="btn btn-sm btn-warning"><span class="gypicon-wrench">Edit</span></a>
                        <a href="<?php echo base_url().'admin/kostumer_hapus/'.$k->kostumer_id;?>" class="btn btn-sm btn-danger"><span class="gypicon-wrench">Hapus</span></a>
                    </td>
                </tr>
                <?php
            }
                ?>
            </tbody>
        </table>
    </div>
</div>