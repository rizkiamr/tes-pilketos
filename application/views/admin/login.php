 
 
 <div class="container ">
    <form class="justify-content-center" method="POST" action="">
        <h2 class="mb-5 text-center">Login Admin</h2>
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
  </div>
  <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
  </div>
  <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>


    <button class="btn btn-primary mx-auto" type="submit" name="submit" id="submit">Login</button>
    </form>

    
 </div>
 

 <style>
     body{
         background: #f0f8ff;
     }
     
     input{
         width: 80%;
     }

     form{
         
         margin-top: 200px;
         margin-left: auto;
         margin-right: auto;
         background: #fff;
         width: 600px;
         padding: 40px;
         padding-top: 40px;
         padding-bottom: 50px;
     }

     button{
         
         width: 100%;
         margin-top: 30px;
         padding-top: 30px;
         height: 45px;
     }

     @media only screen and ( max-width : 768px){
         form{
             width: 80%;
         }
         button{
             position: static;
             transform: translate(0,0);
         }
     }
     
 </style>