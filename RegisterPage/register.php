<html>
<head>
    <title>Lunaset</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/3a65185406.js" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<div class="container">

<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Cadastrar novo usuário</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group" align="center">
<label class="col-md-4 control-label">Nome Completo</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="" placeholder="Nome" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group" align="center">
<label class="col-md-4 control-label" >Idade</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="idade" placeholder="idade" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group" align="center"> 
<label class="col-md-4 control-label">Department / Office</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="department" class="form-control selectpicker">
  <option value="">Select your Department/Office</option>
  <option>Department of Engineering</option>
  <option>Department of Agriculture</option>
  <option >Accounting Office</option>
  <option >Tresurer's Office</option>
  <option >MPDC</option>
  <option >MCTC</option>
  <option >MCR</option>
  <option >Mayor's Office</option>
  <option >Tourism Office</option>
</select>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group" align="center">
<label class="col-md-4 control-label">Username</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="user_name" placeholder="Username" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group" align="center">
<label class="col-md-4 control-label" >Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="user_password" placeholder="Password" class="form-control"  type="password">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group" align="center">
<label class="col-md-4 control-label" >Confirm Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
</div>
</div>
</div>

<!-- Text input-->
   <div class="form-group" align="center">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->
   
<div class="form-group" align="center">
<label class="col-md-4 control-label">Contact No.</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="contact_no" placeholder="(639)" class="form-control" type="text">
</div>
</div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group" align="center">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->

</body>
</html>