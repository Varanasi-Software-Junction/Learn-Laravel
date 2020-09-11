
<div class="container">
    
	<!--**************************-->
       <form action="reportinsert" class="was-validated" method="post" >
{{ csrf_field() }}
<div class="row">
<div class="col-md-12">
<label>{{isset($result) ? $result : ''}} {{isset($newbookno) ? $newbookno : ''}}</label>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="reportlocation">Book Name:</label>
<input value="{{isset($newbook) ? $newbook->bookname : ''}}"  type="text" class="form-control" id="name" placeholder="Enter Book Name" name="bookname" required>

</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="name">Book Subject:</label>
<input value="{{isset($newbook) ? $newbook->subject : ''}}" type="text" class="form-control" id="name" placeholder="Enter Book Subject" name="booksubject" required>

</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="name">Book Price:</label>
<input type="number" value="{{isset($newbook) ? $newbook->price : ''}}" class="form-control" id="name" placeholder="Enter Book Price" name="bookprice" required>

</div>
</div>
<div class="col-md-6">
&nbsp;
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="name"></label>


<input formnovalidate value="Clear" name="button" type="submit" class="btn btn-primary form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="name"></label>


<input name="button" value="Submit"  type="submit" class="btn btn-primary form-control">
</div>
</div>
</div>
</form>
	   <!--*************************-->
    </div>


