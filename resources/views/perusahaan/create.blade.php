<form class="" action="/company" method="post" enctype="multipart/form-data">

  {{csrf_field()}}
  Nama :
  <input type="text" name="name_company" value=""><br>
  description :
  <input type="text" name="description" value=""><br>
  Address :
  <input type="text" name="address" value=""><br>
  Contact :
  <input type="text" name="contact" value=""><br>
  Student :
  <input type="text" name="student" value=""><br>
  <input type="submit" name="" value="Submit">
</form>
