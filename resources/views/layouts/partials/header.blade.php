<!-- Header Start -->

<div class="ast_autho_wrapper">
    <!-- Login Dialog -->
          <div id="login-dialog" class="zoom-anim-dialog mfp-hide">
              <h1>Login Form</h1>
              <form id="login-form">
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
              <form id="register-form">
                  <input id="register-name" type="text" placeholder="Name" required>
                  <input id="register-email" type="text" placeholder="Email" required>
                  <input id="register-password" type="password" placeholder="Password" required>
                  <input id="register-confirm" type="password" placeholder="Confirm Password" required>
                  <input id="register-dob" type="date" placeholder="Date of Birth" required>
                  <input id="register-tob" type="time" placeholder="Birth Time" required>
                  <input id="register-place" type="text" placeholder="Birth Place" required>
                  <select id="register-gender">
                    <option>--Select Your Gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>

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
<div class="ast_header_bottom m-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-10">
        <div class="ast_logo">
          <a href="/"><img src="{{ asset('theme/images/content/logo.png') }}" alt="Logo" title="Logo"></a>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-2">
        <div class="ast_main_menu_wrapper">
          <div class="ast_menu">
            <ul>
              <li><a href="/">home</a></li>
              <li><a href="/about">about</a></li>
              <li><a href="/services">services</a></li>              
              <!-- <li class="as_submenu_li"><a class="dropdown-toggle" href="#">pages</a>
                <ul class="submenu dropdown">
                  <li><a href="team.html">Astrologers</a></li>
                  <li><a href="privacy_policy.html">privacy policy</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="error.html">404 error</a></li>
                </ul>
              </li> -->
              <li><a href="/contact">contact</a></li>
              <li id="loginMenu"><a class="popup-with-zoom-anim" href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</a></li>
              <li id="signupMenu"><a class="popup-with-zoom-anim" href="#signup-dialog"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
              
              <li id="loggedInUser" style="display: none;">
                <a><i class="fa fa-user" aria-hidden="true"></i> <span id="usernameDisplay"></span></a>
              </li>
              
              <li id="logoutMenu" style="display: none;">
                <a href="#" id="logoutBtn"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
              </li>
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

const BACKEND_API = "{{ config('services.backend_api_url') }}";

// ✅ LOGIN FUNCTION
async function handleLogin(e) {
    e.preventDefault();
    const email = document.getElementById('login-email').value;
    const password = document.getElementById('login-password').value;

    document.getElementById('login-text').style.display = 'none';
    document.getElementById('login-spinner').style.display = 'inline';
    document.getElementById('login-error').style.display = 'none';

    try {
        const response = await fetch(`${BACKEND_API}/login`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email, password })
        });

        const data = await response.json();

        if (response.ok) {
            localStorage.setItem("user_id", data.user_id);
            localStorage.setItem("username", data.name);
            localStorage.setItem("useremail", data.email);
            localStorage.setItem("birthtime", data.tob);
            localStorage.setItem("birthplace", data.place);
            localStorage.setItem("userdob", data.dob);
            localStorage.setItem("gender", data.gender);
            window.location.href = '/';
        } else {
            document.getElementById('login-error').textContent = data.error || 'Invalid credentials';
            document.getElementById('login-error').style.display = 'block';
        }
    } catch (error) {
        document.getElementById('login-error').textContent = 'Something went wrong. Try again.';
        document.getElementById('login-error').style.display = 'block';
    } finally {
        document.getElementById('login-text').style.display = 'inline';
        document.getElementById('login-spinner').style.display = 'none';
    }
}

// ✅ REGISTER FUNCTION
async function handleRegister(e) {
    e.preventDefault();
    const name = document.getElementById('register-name').value;
    const email = document.getElementById('register-email').value;
    const password = document.getElementById('register-password').value;
    const confirm = document.getElementById('register-confirm').value;
    const dob = document.getElementById('register-dob').value;
    const tob = document.getElementById('register-tob').value;
    const place = document.getElementById('register-place').value;
    const gender = document.getElementById('register-gender').value;

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
        const response = await fetch(`${BACKEND_API}/register`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ name, email, password, dob, tob, place, gender })
        });

        const data = await response.json();

        if (response.ok) {
            localStorage.setItem("user_id", data.user.id);
            localStorage.setItem("username", data.user.name);
            localStorage.setItem("useremail", data.user.email);
            localStorage.setItem("userdob", data.user.dob);
            localStorage.setItem("birthtime", data.user.tob);
            localStorage.setItem("birthplace", data.user.place);
            localStorage.setItem("gender", data.user.gender);

            document.getElementById('register-success').textContent = 'Registration successful!';
            document.getElementById('register-success').style.display = 'block';
            window.location.href = '/';
        } else {
            document.getElementById('register-error').textContent = data.error || 'Registration failed';
            document.getElementById('register-error').style.display = 'block';
        }
    } catch (error) {
        document.getElementById('register-error').textContent = 'Something went wrong. Try again.';
        document.getElementById('register-error').style.display = 'block';
    } finally {
        document.getElementById('register-text').style.display = 'inline';
        document.getElementById('register-spinner').style.display = 'none';
    }
}

// ✅ ATTACH EVENT LISTENERS
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('login-form').addEventListener('submit', handleLogin);
    document.getElementById('register-form').addEventListener('submit', handleRegister);

    const userId = localStorage.getItem("user_id");
    const username = localStorage.getItem("username");
    const isLoggedIn = !!userId;
    const loginMenu = document.getElementById("loginMenu");
    const signupMenu = document.getElementById("signupMenu");
    
    if (loginMenu) loginMenu.style.display = isLoggedIn ? "none" : "list-item";
    if (signupMenu) signupMenu.style.display = isLoggedIn ? "none" : "list-item";
    
    if (document.getElementById("loggedInUser"))
        document.getElementById("loggedInUser").style.display = isLoggedIn ? "list-item" : "none";
    if (document.getElementById("logoutMenu"))
        document.getElementById("logoutMenu").style.display = isLoggedIn ? "list-item" : "none";
    if (isLoggedIn && username) {
        document.getElementById("usernameDisplay").innerText = username;
    }

    // Logout
    document.getElementById("logoutBtn")?.addEventListener("click", function (e) {
        e.preventDefault();
        localStorage.clear();
        window.location.href = '/';
    });
});


</script>
