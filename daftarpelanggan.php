<html>
<head>
<title>Untitled Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="tampildata.php">
<pre>
<hr>
<h3> DAFTAR PELANGGAN BARU </h3> 
<hr>
<h3> Data Pribadi </h3>
</hr>
<tr>
<td>Nama Lengkap   <input type="text"name="name"/><br></td>
<td>jenis Kelamin  <input name="jenis" type="radio" value="pria"/>pria
                   <input name="jenis" type="radio" value="Wanita"/>wanita
<td>E-Mail		   <input type="text"name="email"/><br></td>
<hr>
<h3> Data Alamat Pengirim </h3>
</hr>
<td>Nama Negara	  <input type="text"name="negara"value=" Indonesia"/><br></td>
<td>Kota 		  <input type="text"name="kota"/><br></td>
   
<td>Alamat		  <textarea type="text" name="alamat"></textarea><br></td>
<td>Kode Post	  <input type="text"name="kode"/>*(diisi minimal/max 5 digit)<br></td>
<hr>
<h3> Data No Kontak </h3>
</hr>
<td>No.Telpon	   <input type="text"name="telpon"/><br></td>
<td>No.Handphone   <input type="text"name="Handphone"/><br></td>
<td>No.Faksimili   <input type="text"name="Faksimili"/><br></td>

<input type="submit"name="send" value="send" ><br>
<input type="submit"name="reset" value="reset" >
       
</pre>
</form>
</body>
</html>

 