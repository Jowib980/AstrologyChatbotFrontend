<!-- Header Start -->
<div class="ast_top_header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="ast_contact_details">
          <ul>
            <li><i class="fa fa-phone" aria-hidden="true"></i> +1800 326 3264</li>
            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> support@website.com</a></li>
          </ul>
        </div>
        <div class="ast_autho_wrapper">
          <ul>
            <li><a class="popup-with-zoom-anim" href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</a></li>
            <li><a class="popup-with-zoom-anim" href="#signup-dialog"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
            <li class="ast_search">
              <a href="javascript:;"><i class="fa fa-search"></i></a>
              <div class="ast_search_field">
                <form>
                  <input type="text" placeholder="Search Here">
                  <button type="button"><i class="fa fa-search"></i></button>
                </form>
              </div>
            </li>
            <li class="ast_cart">
              <a href="javascript:;"><i class="fa fa-shopping-cart"></i></a>
              <div class="ast_cart_box">
                <div class="ast_cart_list">
                  <ul>
                    <li>
                      <div class="ast_cart_img">
                        <img src="{{ asset('theme/images/content/Products/thumb1.jpg') }}" class="img-responsive">
                      </div>
                      <div class="ast_cart_info">
                        <a href="#">Yellow Sapphire</a>
                        <p>1 X $20.00</p>
                        <a href="javascript:;" class="ast_cart_remove"><i class="fa fa-trash"></i></a>
                      </div>
                    </li>
                    <li>
                      <div class="ast_cart_img">
                        <img src="{{ asset('theme/images/content/Products/thumb1.jpg') }}" class="img-responsive">
                      </div>
                      <div class="ast_cart_info">
                        <a href="#">yantra</a>
                        <p>1 X $10.00</p>
                        <a href="javascript:;" class="ast_cart_remove"><i class="fa fa-trash"></i></a>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ast_cart_total">
                  <p>total<span>$30.00</span></p>
                </div>
                <div class="ast_cart_btn">
                  <button type="button">view cart</button>
                  <button type="button">checkout</button>
                </div>
              </div>
            </li>
          </ul><!---->
          <!-- Login Dialog -->
          <div id="login-dialog" class="zoom-anim-dialog mfp-hide">
              <h1>Login Form</h1>
              <form onsubmit="handleLogin(event)">
                  <input id="login-email" type="text" placeholder="Email" required>
                  <input id="login-password" type="password" placeholder="Password" required>
                  
                  <div id="login-error" style="color:red;display:none;"></div>
                  
                  <button type="submit" class="ast_btn">
                      <span id="login-text">Login</span>
                      <span id="login-spinner" style="display:none;">Loading...</span>
                  </button>
                  <p>Create An Account ? <a href="#signup-dialog" class="popup-with-zoom-anim">SignUp</a></p>
              </form>
          </div>

          <!-- Signup Dialog -->
          <div id="signup-dialog" class="zoom-anim-dialog mfp-hide">
              <h1>Signup Form</h1>
              <form onsubmit="handleRegister(event)">
                  <input id="register-name" type="text" placeholder="Name" required>
                  <input id="register-email" type="text" placeholder="Email" required>
                  <input id="register-password" type="password" placeholder="Password" required>
                  <input id="register-confirm" type="password" placeholder="Confirm Password" required>
                  <input id="register-dob" type="date" placeholder="Date of Birth" required>
                  <input id="register-tob" type="time" placeholder="Birth Time" required>
                  <input id="register-place" type="text" placeholder="Birth Place" required>

                  <div id="register-error" style="color:red;display:none;"></div>
                  <div id="register-success" style="color:green;display:none;"></div>
                  
                  <button type="submit" class="ast_btn">
                      <span id="register-text">Submit</span>
                      <span id="register-spinner" style="display:none;">Loading...</span>
                  </button>
                  <p>Have An Account ? <a href="#login-dialog" class="popup-with-zoom-anim">Login</a></p>
              </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="ast_header_bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-10">
        <div class="ast_logo">
          <a href="index.html"><img src="{{ asset('theme/images/content/logo.png') }}" alt="Logo" title="Logo"></a>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-2">
        <div class="ast_main_menu_wrapper">
          <div class="ast_menu">
            <ul>
              <li class="as_submenu_li"><a class="dropdown-toggle" href="/">home</a></li>
              <li><a href="/about">about</a></li>
              <li><a href="/services">services</a></li>              
              <li class="as_submenu_li"><a class="dropdown-toggle" href="#">pages</a>
                <ul class="submenu dropdown">
                  <li><a href="team.html">Astrologers</a></li>
                  <li><a href="privacy_policy.html">privacy policy</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="error.html">404 error</a></li>
                </ul>
              </li>
              <li><a href="contact.html">contact</a></li>
            </ul>
          </div>
        </div>
        <button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- Header End -->  


<script>
    // ✅ Set your Flask backend API URL
    const BACKEND_API_URL = "http://127.0.0.1:5000/api";

    async function handleLogin(e) {
        e.preventDefault();
        const email = document.getElementById('login-email').value;
        const password = document.getElementById('login-password').value;
        
        document.getElementById('login-text').style.display = 'none';
        document.getElementById('login-spinner').style.display = 'inline';
        document.getElementById('login-error').style.display = 'none';
        
        try {
            const response = await fetch(`${BACKEND_API_URL}/login`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ email, password })
            });

            const data = await response.json();

            if (response.ok) {
                localStorage.setItem("user_id", data.user_id);
                localStorage.setItem("username", data.name);
                localStorage.setItem("useremail", data.email);
                window.location.href = '/';
            } else {
                document.getElementById('login-error').textContent = data.error || 'Invalid credentials';
                document.getElementById('login-error').style.display = 'block';
            }
        } catch (error) {
            document.getElementById('login-error').textContent = 'An error occurred. Please try again.';
            document.getElementById('login-error').style.display = 'block';
        } finally {
            document.getElementById('login-text').style.display = 'inline';
            document.getElementById('login-spinner').style.display = 'none';
        }
    }

    async function handleRegister(e) {
        e.preventDefault();
        const name = document.getElementById('register-name').value;
        const email = document.getElementById('register-email').value;
        const password = document.getElementById('register-password').value;
        const confirm = document.getElementById('register-confirm').value;
        const dob = document.getElementById('register-dob').value;
        const tob = document.getElementById('register-tob').value;
        const place = document.getElementById('register-place').value;

        if (password !== confirm) {
            document.getElementById('register-error').textContent = 'Passwords do not match';
            document.getElementById('register-error').style.display = 'block';
            return;
        }
        
        document.getElementById('register-text').style.display = 'none';
        document.getElementById('register-spinner').style.display = 'inline';
        document.getElementById('register-error').style.display = 'none';
        document.getElementById('register-success').style.display = 'none';
        
        try {
            const response = await fetch(`${BACKEND_API_URL}/register`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ name, email, password, dob, tob, place })
            });

            const data = await response.json();

            if (response.ok) {
                localStorage.setItem("user_id", data.user.id);
                localStorage.setItem("username", data.user.name);
                localStorage.setItem("useremail", data.user.email);
                localStorage.setItem("userdob", data.user.dob);
                localStorage.setItem("birthtime", data.user.tob);
                localStorage.setItem("birthplace", data.user.place);
                document.getElementById('register-success').textContent = 'Registration successful!';
                document.getElementById('register-success').style.display = 'block';
                
            } else {
                document.getElementById('register-error').textContent = data.error || 'Registration failed';
                document.getElementById('register-error').style.display = 'block';
            }
        } catch (error) {
            document.getElementById('register-error').textContent = 'An error occurred. Please try again.';
            document.getElementById('register-error').style.display = 'block';
        } finally {
            document.getElementById('register-text').style.display = 'inline';
            document.getElementById('register-spinner').style.display = 'none';
        }
    }
</script>
