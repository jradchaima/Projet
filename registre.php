<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Document</title>
   <style>
     *{margin:0;
     padding:0;
     }
    .background{
      position:top;
      text-align:center;
      width:100%;
      height:100%;
      overflow:hidden;
      z-index:-1000;
    }
    .contenu{
      position:absoulte;
      width:100%;
      min-height:100%
      z-index:-1000;
      background-color:regba(0,0,0,0.7);
    }
    .contenu h1{
      text align :center;
      font size:55px;
     text-transform:uppercase;
     color:read

    }
    .form{
      text:bas;
    }
    
  </style>
</head>
<body>
<div class="background">
<iframe width="560" height="315" 
src="https://www.youtube.com/embed/pIlJliFui-M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="contenu">
<h1>Inscription!</h1>
</div>
<?php if (isset($auth_error)): ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= $auth_error ?>
                    </div>
                <?php endif ?>
        
        <div class="form">
          
          <div id="errormessage"></div>
          <form action="create.php"  method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="texte" class="form-control" name="cid" id="cid" placeholder="Your identity card" data-rule="minlen:8" data-msg="Please enter a valid CID" />
                <div class="validation"></div>
                <span class="text-danger"><?php if (isset($cid_error)) echo $cid_error; ?></span>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
                <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your phone number" data-rule="minlen:8" data-msg="Please enter a valid number" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Your adresse" data-msg="Please enter an adresse" />
                <div class="validation"></div>
               </div>
            </div>
            <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" name="pwd" class="form-control" >
                        <span class="text-danger"><?php if (isset($pwd_error)) echo $password_error; ?></span>
                    </div>  
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-primary">s'inscrire</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-block btn-outline-secondary">Annuler</button>
                    </div>
          </form>
        </div>
        
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>