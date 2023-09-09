<?php include('header.php'); ?>

    <div class="container" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#fff,#ebebeb);
    background-color:#EBEBEB;
    margin: 0 auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
	
		<br>
    <div class="alert alert-info"></div>
	<div class="addstudent">
	<div class="details">
	
	<strong>Masukan detil Surat Permohonan Pembelian</strong></div>	
<form name="postform" action="po.php" method="post" >
<br>
		    <div class="control-group">
<tr>
<td>Tanggal :</td> <td><input type="text" id="from" name="tanggal" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
</tr>
<div class="controls">
<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</div>
</iframe>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">No SPP:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="nospp"   required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword" id="tanggal">Nama barang</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="namabrg"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword" id="tanggal">Jumlah</label>
						<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="jumlah"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Satuan</label>
			<div class="controls">
			<select name="satuan" id="satuan">
										<option value="">--Pilih Satuan--</option>
										<option value="box">box</option>
										<option value="pcs">pcs</option>
										<option value="rim">rim</option>
		</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Harga</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="harga"   required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Keterangan</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="keterangan" required>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success" onClick="history.go(0)" VALUE="Refresh"><i class="icon-save icon-large"></i>&nbsp;<A HREF="javascript:history.go(0)">Simpan</A></button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>