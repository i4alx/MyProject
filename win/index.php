<?php
include './inc/db.php';
include './inc/form.php' ;
include './inc/select.php' ;
include './inc/db_close.php' ;
?>

<?php include_once './parts/header.php' ; ?>


 
 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
    <img src="images/image.png" width=50%  alt="" > <br> <br> <br>
    <h1 class="display-4 fw-normal"> اربح مع عبدالله </h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">    للسحب على ربح نسخة مجانيه من البرنامج   </p>
     </div>

    <div class="container">
      <h3>   للدخول بالسحب يرجى اتباع ما يلي   </h3>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">  تابع حساباتي على مواقع التواصل الاجتماعي </li>
  <li class="list-group-item">   Youtube:Abdullah_alessa  </li>
  <li class="list-group-item"> Instagram:Abdullah_alessa   </li>
  <li class="list-group-item">  Snapchat:Abdullah_alessa  </li>
  <li class="list-group-item">    Twitter:Abdullah_alessa   </li>
</ul>
  </div>
  </div>


<div class="container">

<div class="position-relative text-center  ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form  action="<?php $_SERVER['PHP_SELF']?>" method="POST" >
<h3>الرجاء ادخل معلوماتك</h3>

<div class="form-floating mb-3">
  <label for="firstName"> الاسم الاول  </label>
<input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo trim($firstName); ?>" placeholder="name@example.com">
  <div   class="form-text error "> <?php echo $errors['firstNameError'] ?></div>

</div>

<div class="form-floating mb-3">
 <label for="lastName">  الاسم الاخير   </label>
<input type="text" name="lastName" id="lastName" class="form-control"  value="<?php echo trim($lastName); ?>" placeholder="name@example.com"> 
<div   class="form-text error "> <?php echo $errors['lastNameError'] ?></div>
</div>

<div class="form-floating mb-3">
  <label for="email"> البريد الالكتروني  </label>
<input type="text" name="email" id="email" class="form-control"  value="<?php echo trim($email); ?>" placeholder="name@example.com">
  <div class="form-text error " ><?php echo $errors['emailError'] ?> </div>

</div>

<button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>

</div>
</div>

 
 
 
<div class="loader-con" >

<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
 
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5 ">

<button type="button" id="winner" class="btn btn-primary"  >
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="Modal" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
 <h5 class="modal-title" id="ModalLabel">  الفائز هو  </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
      <div class="modal-body">
      <?php foreach($users as $user) :?>
<h1 class="display-3 text-center modal-title" id="Modal">   <?php echo htmlspecialchars( $user['firstName']) .' '.  htmlspecialchars( $user['lastName'])  ?></h1>
<?php endforeach; ?>
</div>
     </div>
  </div>
</div>










 <div id="cards" class="row mb-5 pb-5 ">   

 
  <div class="col-sm-6">
    <div class="card my-2 bg-light">
      <div class="card-body">
        <h5 class="card-title"> </h5>
  <p class="card-text"><?php echo htmlspecialchars( $user['email']) ; ?> </p>
         </div>
        </div>
        </div>
       

        </div>
        
<?php include './parts/footer.php' ; ?>


<style>
  
#countdown {
    color: red;
    padding: 10px;
   
}

#cards {
    display: none;
 }   
 
  #loader{
position: fixed;
top: 50%;
left : 50%;
transform : translate(-50%,-50%); 

  }


  .loader-con{
    display: none;
 position: fixed;
top: 0;
left : 0;
width: 100%;
height: 100%;
background-color: #000000eb; ;

}
.list-group-item {

  background: transparent;


}

img {
  max-width: 100%;
}
</style>
 