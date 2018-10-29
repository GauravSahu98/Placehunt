<div class="popup" id="studentsignup">
            <div class="container">
              <div class="frame">
                <div class="nav">
                  <ul class"links">
                    <li class="signin-active"><a class="btn">Sign in</a></li>
                    <li class="signup-inactive"><a class="btn">Sign up </a></li>
                  </ul>
                </div>
                <div>
                  <form class="form-signin" action="javascript:void(0);" method="post" id="form1" name="form1">
                      <label for="username">Username</label>
                      <input class="form-styling" type="text" name="username" placeholder="" required/>
                      <label for="password">Password</label>
                      <input class="form-styling" type="password" name="password" placeholder="" required/>
                      <input class="btn-signin btn-animate" id="ssignin" type="submit" name="ssignin" value="Sign In"/>
                    </form>
                    
                    <form class="form-signup" action="javascript:void(0);" method="POST" id="form2" name="form2">
                      <label for="fullname">Username</label>
                      <input class="form-styling" type="text" name="username" placeholder="" required/>
                      <label for="email">Email</label>
                      <input class="form-styling" type="text" name="email" placeholder="" required/>
                      <label for="password">Password</label>
                      <input class="form-styling" type="password" name="password" placeholder="" required/>
                      <label for="confirmpassword">Confirm password</label>
                      <input class="form-styling" type="password" name="confirmpassword" placeholder="" required/>
                      <input class="btn-signup btn-animate" id="ssignup" type="submit" name="ssignup" value="Sign Up"/>
                    </form>
                  
                  </div>
              </div>
                
            </div>
            <a class="popup__close" href="#">X</a>
          </div>
        </div>

        <div class="popup" id="companysignup">
          <div class="container">
            <div class="frame">
              <div class="nav">
                <ul class"links">
                  <li class="signin-active"><a class="btn">Sign in</a></li>
                  <li class="signup-inactive"><a class="btn">Sign up </a></li>
                </ul>
              </div>
              <div>
                <form class="form-signin" action="javascript:void(0);" method="POST" id="form3" name="form3">
                    <label for="username">Username</label>
                    <input class="form-styling" type="text" name="username" placeholder="" required/>
                    <label for="password">Password</label>
                    <input class="form-styling" type="password" name="password" placeholder="" required/>
                    <input class="btn-signin btn-animate" id="csignin" type="submit" name="csignin" value="Sign In"/>
                  </form>
                  
                  <form class="form-signup" action="javascript:void(0);" method="post" id="form4" name="form4">
                    <label for="fullname">Username</label>
                    <input class="form-styling" type="text" name="username" placeholder="" required/>
                    <label for="email">Email</label>
                    <input class="form-styling" type="text" name="email" placeholder="" required/>
                    <label for="password">Password</label>
                    <input class="form-styling" type="password" name="password" placeholder="" required/>
                    <label for="confirmpassword">Confirm password</label>
                    <input class="form-styling" type="password" name="confirmpassword" placeholder="" required/>
                    <input class="btn-signup btn-animate" id="csignup" type="submit" name="csignup" value="Sign Up"/>
                  </form>
                
                </div>
            </div>
              
          </div>
              <a class="popup__close" href="#">X</a>
            </div>
          </div>
          <script>
               toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": true,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": true,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "1500",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }

        $("#ssignin").click(function(){
            $(this).data('clicked', true);
        });

        $("#ssignup").click(function(){
            $(this).data('clicked', true);
        });

        $("#csignin").click(function(){
            $(this).data('clicked', true);
        });

        $("#csignup").click(function(){
            $(this).data('clicked', true);
        });
        </script>
          <script type="text/javascript">
           
           $("form").submit(function(){
            var formID = $(this).attr('id');
            var formDetails = $('#'+formID);
            var data= formDetails.serializeArray();

           $uname = data[0].value;
           $password = data[1].value;
          
          if($('#ssignin').data('clicked')) {
           $.ajax({
               url: "student/login.php",
               method:"POST",
               data:{username: $uname,password: $password},
               dataType:"json",
               success:function(response){
                 if(response.loggedin==true)
                 {
                    toastr["success"]("Logged in successfully", $uname);
                    setTimeout("location.href = 'student/index.php'", 1500);
                 }else{
                    toastr["error"]("Invalid credentials", "We're sorry");
                    setTimeout("location.href = 'index.php#studentsignup'", 1500);
                 }
                 
               },
               error: function () {
                   toastr["error"]("Invalid credentials", "We're sorry");
                   setTimeout("location.href = 'index.php#studentsignup'", 1500);
               }  
                   
               
           });
          }
       });

         $("form").submit(function(){
            var formID = $(this).attr('id');
            var formDetails = $('#'+formID);
            var data= formDetails.serializeArray();

           $uname = data[0].value;
           $password = data[1].value;
           
          if($('#csignin').data('clicked')) { 
           $.ajax({
               url: "company/login.php",
               method:"POST",
               data:{username: $uname,password: $password},
               dataType:"json",
               success:function(response){
                 if(response.loggedin==true)
                 {
                    toastr["success"]("Logged in successfully", $uname);
                    setTimeout("location.href = 'company/index.php'", 1500);
                 }else{
                    toastr["error"]("Invalid credentials", "We're sorry");
                    setTimeout("location.href = 'index.php#companysignup'", 1500);
                 }
                 
               },
               error: function () {
                   toastr["error"]("Invalid credentials", "We're sorry");
                   setTimeout("location.href = 'index.php#companysignup'", 1500);
               }  
                   
               
           });
          }
       });

          $("form").submit(function(){
            var formID = $(this).attr('id');
            var formDetails = $('#'+formID);
            var data= formDetails.serializeArray();

           $uname = data[0].value;
           $email = data[1].value;
           $password = data[2].value;
           
          if($('#ssignup').data('clicked')) {
           $.ajax({
               url: "student/register.php",
               method:"POST",
               data:{username: $uname,email: $email,password: $password},
               dataType:"json",
               success:function(response){
                 if(response.registered==true)
                 {
                    toastr["success"]("Registered successfully. Please log in", $uname);
                    setTimeout("location.href = 'index.php#studentsignup'", 1500);
                 }else if(response.exists==true){
                    toastr["error"]("Username already exists", "Choose a new one");
                    setTimeout("location.href = 'index.php#studentsignup'", 1500);
                 }
                 else{
                    toastr["error"]("Could not register. Register again", "We're sorry");
                    setTimeout("location.href = 'index.php#studentsignup'", 1500);
                 }
                 
               },
               error: function (response) {
                   toastr["error"]("Could not register. Register again", "We're sorry");
                   setTimeout("location.href = 'index.php#studentsignup'", 1500);
               }  
                   
               
           });
          }
       });

          $("form").submit(function(){
            var formID = $(this).attr('id');
            var formDetails = $('#'+formID);
            var data= formDetails.serializeArray();

           $uname = data[0].value;
           $email = data[1].value;
           $password = data[2].value;
           
          if($('#csignup').data('clicked')) {
           $.ajax({
               url: "company/register.php",
               method:"POST",
               data:{username: $uname, email: $email, password: $password},
               dataType:"json",
               success:function(response){
                 if(response.registered==true)
                 {
                    toastr["success"]("Registered successfully. Please log in", $uname);
                    setTimeout("location.href = 'index.php#companysignup'", 1500);
                 }else if(response.exists==true){
                    toastr["error"]("Username already exists", "Choose a new one");
                    setTimeout("location.href = 'index.php#companysignup'", 1500);
                 }
                 else{
                    toastr["error"]("Could not register. Register again", "We're sorry");
                    setTimeout("location.href = 'index.php#companysignup'", 1500);
                 }
                 
               },
               error: function () {
                   toastr["error"]("Could not register. Register again", "We're sorry");
                   setTimeout("location.href = 'index.php#companysignup'", 1500);
               }  
                   
               
           });
          }
       });
       </script>