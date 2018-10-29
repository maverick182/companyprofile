<?php
    include "koneksi.php";
	$id_kelas=$_GET['id_kelas'];
	$modal=mysqli_query($koneksi,"SELECT * FROM kelas WHERE id_kelas='$id_kelas'");
	while($edit=mysqli_fetch_array($modal)){
?>


    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Kelas</h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Kelas</label>
                    <input type="hidden" name="id_kelas"  class="form-control" value="<?php echo $edit['id_kelas']; ?>" />
     				<input type="text" name="kelas"  class="form-control" value="<?php echo $edit['kelas']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
					<label for="Description">Nama Kelas</label>
     				<textarea name="description"  class="form-control"><?php echo $edit['nama_kelas']; ?></textarea>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Date">Quantitas</label>       
     				<input type="text" name="quantitas"  class="form-control" value="<?php echo $edit['quantitas']; ?>" disabled/>
                </div>

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>