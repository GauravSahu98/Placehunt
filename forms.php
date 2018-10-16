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
                  <form class="form-signin" action="student/login.php" method="post" name="form">
                      <label for="username">Username</label>
                      <input class="form-styling" type="text" name="username" placeholder="" required/>
                      <label for="password">Password</label>
                      <input class="form-styling" type="password" name="password" placeholder="" required/>
                      <input class="btn-signin btn-animate" type="submit" name="signin" value="Sign In"/>
                    </form>
                    
                    <form class="form-signup" action="student/register.php" method="POST" name="form">
                      <label for="fullname">Username</label>
                      <input class="form-styling" type="text" name="username" placeholder="" required/>
                      <label for="email">Email</label>
                      <input class="form-styling" type="text" name="email" placeholder="" required/>
                      <label for="password">Password</label>
                      <input class="form-styling" type="password" name="password" placeholder="" required/>
                      <label for="confirmpassword">Confirm password</label>
                      <input class="form-styling" type="password" name="confirmpassword" placeholder="" required/>
                      <input class="btn-signup btn-animate" type="submit" name="signup" value="Sign Up"/>
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
                <form class="form-signin" action="company/login.php" method="POST" name="form">
                    <label for="username">Username</label>
                    <input class="form-styling" type="text" name="username" placeholder="" required/>
                    <label for="password">Password</label>
                    <input class="form-styling" type="password" name="password" placeholder="" required/>
                    <input class="btn-signin btn-animate" type="submit" value="Sign In"/>
                  </form>
                  
                  <form class="form-signup" action="company/register.php" method="post" name="form">
                    <label for="fullname">Username</label>
                    <input class="form-styling" type="text" name="username" placeholder="" required/>
                    <label for="email">Email</label>
                    <input class="form-styling" type="text" name="email" placeholder="" required/>
                    <label for="password">Password</label>
                    <input class="form-styling" type="password" name="password" placeholder="" required/>
                    <label for="confirmpassword">Confirm password</label>
                    <input class="form-styling" type="password" name="confirmpassword" placeholder="" required/>
                    <input class="btn-signup btn-animate" type="submit" value="Sign Up"/>
                  </form>
                
                </div>
            </div>
              
          </div>
              <a class="popup__close" href="#">X</a>
            </div>
          </div>
