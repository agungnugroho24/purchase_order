<?php include('header.php'); ?>
    <div class="container" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#fff,#ebebeb);
    background-color:#EBEBEB;
    margin: 0 auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<br>
             <div class="alert alert-info" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#ebebeb,#00FFFF );
    background-color:#ffffff;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);"></div>
	<div class="addstudent">
	<div class="details" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#fff,#ebebeb );
    background-color:#ebebeb;
    margin-bottom: 10px auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);"><strong>Masukan detil PO</strong></div>		
	<form class="form-horizontal" method="POST" action="po.php" enctype="multipart/form-data">
			<br>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Po. No:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="nopo"   required>
			</div>
		</div>		
			<div class="control-group">
			<label class="control-label" for="inputPassword" id="tanggal">Date</label>
						<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="date"  required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Delivery date:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="deldate"   required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">NPWP:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="npwp"   required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="iionputPassword">SPP No:</label>
			<div class="controls">
			<input type="text" class="span1" id="inputPassword" name="sppno"   required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">SPP Date:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="sppdate"   required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Supplier:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="supplier"   required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Address:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="alamat"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Description:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="description"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Quantity:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="qty"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Satuan:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="unit"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Price:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="price"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Amount:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="amount"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Sub total:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="subtotal"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">General total:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="generaltotal"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Keterangan:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="keterangan"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Bilangan:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="bilangan"  required>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Simpan</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>