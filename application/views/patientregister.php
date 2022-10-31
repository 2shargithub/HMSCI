<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEMR System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;1,600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c646f67c6c.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="<?php echo base_url();?>template/css/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>template/css/main.css">
<link rel="stylesheet" href="<?php echo base_url();?>template\js\bayanno.js">

</head>
<body> 
<header>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgba(0,147,173,10);
    border-bottom: 2px solid rgba(0,147,173,0.7);
    border-top: 2px solid rgba(0,147,173,0.7);">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">UEMR System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo base_url() . 'index.php' ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo base_url() . 'index.php?patientregister' ?>">Patient Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . 'index.php?login' ?>">
                Login
              </a>           
            </li>
          </ul>         
        </div>
      </div>
    </nav>
</header>
      
<!----CREATION FORM STARTS---->
<section class="abt mt-5 mb-5" id="abt">
    <div class="container">
        <br /><br />
        <h2>Patient Registration Form</h2>
        <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="tab-pane box" id="add" style="padding: 5px">

                <div class="box-content">

                    <?php echo form_open('patientregister/manage_patient/create/' , array('class' => 'form-horizontal validatable'));?>

                        <div class="padded">

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Name');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required] form-control" name="name"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Email');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required] form-control" name="email"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Password');?></label>

                                <div class="controls">

                                    <input type="password" class="validate[required] form-control" name="password"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Address');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required] form-control" name="address"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Phone');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required] form-control" name="phone"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Sex');?></label>

                                <div class="controls">

                                    <select name="sex" class="uniform form-control" style="width:100%;">

                                        <option value="male"><?php echo ('Male');?></option>

                                        <option value="female"><?php echo ('Female');?></option>

                                    </select>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Birth Date');?></label>

                                <div class="controls">

                                    <input type="date" class="validate[required] form-control" name="birth_date"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Age');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required] form-control" name="age"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Blood Group');?></label>

                                <div class="controls">

                                    <select name="blood_group" class="uniform form-control" style="width:100%;">

                                        <option value="A+">A+</option>

                                        <option value="A-">A-</option>

                                        <option value="B+">B+</option>

                                        <option value="B-">B-</option>

                                        <option value="AB+">AB+</option>

                                        <option value="AB-">AB-</option>

                                        <option value="O+">O+</option>

                                        <option value="O-">O-</option>

                                    </select>

                                </div>

                            </div>

                        </div>
                        <br />
                        <div class="form-actions">

                            <button type="submit" class="btn btn-success btn-primary"><?php echo ('Add Patient');?></button>

                        </div>

                    <?php echo form_close();?>                

                </div>                

            </div>

            <!----CREATION FORM ENDS--->
</div>
</div>
</div>
</section>

            

       


<footer>
    
    <div class="copyright text-center">
        <p>© 2022 UEMR System - Developed by UEL</p>
    </div>
</footer>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script src="<?php echo base_url();?>template/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>template/js/main.js"></script>
</body>
</html>














