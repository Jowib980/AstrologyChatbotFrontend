<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Chatbot Portal - Login/Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .auth-container {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        .auth-card {
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .auth-card:hover {
            box-shadow: 0 15px 40px -5px rgba(0, 0, 0, 0.15);
        }
        .form-switch:checked {
            background-position: right center;
            background-color: #4f46e5;
        }
        .input-field:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        .btn-primary {
            background-color: #4f46e5;
            transition: all 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #4338ca;
            transform: translateY(-1px);
        }
        .loader {
            border-top-color: #4f46e5;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="min-h-screen auth-container flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e23e620e-a7bd-4330-8604-6c446a123dc2.png" alt="AI Chatbot logo - futuristic hexagonal logo with gradient blue and purple colors, representing artificial intelligence" class="w-24 h-24 object-contain" />
            </div>
            <h1 class="text-3xl font-bold text-gray-800">AI Chatbot Portal</h1>
            <p class="text-gray-600 mt-2">Connect with your intelligent assistant</p>
        </div>

        <div class="bg-white rounded-xl p-8 auth-card">
            <!-- Tab Selection -->
            <div class="flex mb-6 border-b border-gray-200">
                <button id="login-tab" class="flex-1 py-2 px-4 font-medium text-center text-indigo-600 border-b-2 border-indigo-600">
                    Sign In
                </button>
                <button id="register-tab" class="flex-1 py-2 px-4 font-medium text-center text-gray-500">
                    Register
                </button>
            </div>

            <!-- Login Form -->
            <form id="login-form" class="space-y-4" onsubmit="handleLogin(event)">
                <div>
                    <label for="login-email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="login-email" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                        placeholder="your@email.com">
                </div>
                <div>
                    <label for="login-password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="login-password" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                        placeholder="••••••••">
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                </div>
                <button type="submit" class="w-full btn-primary text-white py-2 px-4 rounded-md flex items-center justify-center">
                    <span id="login-text">Sign In</span>
                    <div id="login-spinner" class="hidden ml-2 w-5 h-5 border-2 border-white border-opacity-60 rounded-full loader"></div>
                </button>
                <div id="login-error" class="text-red-500 text-sm mt-2 hidden"></div>
            </form>

            <!-- Register Form -->
            <form id="register-form" class="hidden space-y-4" onsubmit="handleRegister(event)">
                <div>
                    <label for="register-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" id="register-name" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                        placeholder="John Doe">
                </div>
                <div>
                    <label for="register-email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="register-email" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                        placeholder="your@email.com">
                </div>
                <div>
                    <label for="register-password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="register-password" required minlength="8"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                        placeholder="••••••••">
                    <p class="text-xs text-gray-500 mt-1">Minimum 8 characters</p>
                </div>
                <div>
                    <label for="register-confirm" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" id="register-confirm" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                        placeholder="••••••••">
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" type="checkbox" required class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-medium text-gray-700">I agree to the <a href="#" class="text-indigo-600 hover:text-indigo-500">terms and conditions</a></label>
                    </div>
                </div>
                <button type="submit" class="w-full btn-primary text-white py-2 px-4 rounded-md flex items-center justify-center">
                    <span id="register-text">Create Account</span>
                    <div id="register-spinner" class="hidden ml-2 w-5 h-5 border-2 border-white border-opacity-60 rounded-full loader"></div>
                </button>
                <div id="register-error" class="text-red-500 text-sm mt-2 hidden"></div>
                <div id="register-success" class="text-green-500 text-sm mt-2 hidden">Registration successful! You can now login.</div>
            </form>

           <!--  <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Or continue with</span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-3">
                    <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        <i class="fab fa-google text-red-500"></i>
                        <span class="ml-2">Google</span>
                    </button>
                    <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        <i class="fab fa-github text-gray-800"></i>
                        <span class="ml-2">GitHub</span>
                    </button>
                </div>
            </div> -->
        </div>
    </div>

    <script>

        const BACKEND_API_URL = "{{ env('BACKEND_API_URL') }}"

        // Tab switching
        const loginTab = document.getElementById('login-tab');
        const registerTab = document.getElementById('register-tab');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');

        loginTab.addEventListener('click', () => {
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
            loginTab.classList.add('text-indigo-600', 'border-indigo-600');
            loginTab.classList.remove('text-gray-500');
            registerTab.classList.add('text-gray-500');
            registerTab.classList.remove('text-indigo-600', 'border-indigo-600');
        });

        registerTab.addEventListener('click', () => {
            registerForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
            registerTab.classList.add('text-indigo-600', 'border-indigo-600');
            registerTab.classList.remove('text-gray-500');
            loginTab.classList.add('text-gray-500');
            loginTab.classList.remove('text-indigo-600', 'border-indigo-600');
        });

        // Form handling
        async function handleLogin(e) {
            e.preventDefault();
            const email = document.getElementById('login-email').value;
            const password = document.getElementById('login-password').value;
            
            // Show loading state
            document.getElementById('login-text').classList.add('hidden');
            document.getElementById('login-spinner').classList.remove('hidden');
            document.getElementById('login-error').classList.add('hidden');
            
            try {
                const response = await fetch(`${BACKEND_API_URL}/login`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();

                if (response.ok) {
                    // Login success
                    localStorage.setItem("user_id", data.user_id); // optional
                    window.location.href = '/bot';  // Change this to your actual chatbot page
                } else {
                    document.getElementById('login-error').textContent = data.error || 'Invalid credentials';
                    document.getElementById('login-error').classList.remove('hidden');
                }
            } catch (error) {
                document.getElementById('login-error').textContent = 'An error occurred. Please try again.';
                document.getElementById('login-error').classList.remove('hidden');
            } finally {
                document.getElementById('login-text').classList.remove('hidden');
                document.getElementById('login-spinner').classList.add('hidden');
            }
        }

        async function handleRegister(e) {
            e.preventDefault();
            const name = document.getElementById('register-name').value;
            const email = document.getElementById('register-email').value;
            const password = document.getElementById('register-password').value;
            const confirm = document.getElementById('register-confirm').value;
            
            if (password !== confirm) {
                document.getElementById('register-error').textContent = 'Passwords do not match';
                document.getElementById('register-error').classList.remove('hidden');
                return;
            }
            
            // Show loading state
            document.getElementById('register-text').classList.add('hidden');
            document.getElementById('register-spinner').classList.remove('hidden');
            document.getElementById('register-error').classList.add('hidden');
            document.getElementById('register-success').classList.add('hidden');
            
            try {
                // Simulate API call to your Python backend
               const response = await fetch(`${BACKEND_API_URL}/register`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name, email, password })
                });

                const data = await response.json();
                console.log(data.user.id);

                if (response.ok) {
                    // Login success
                    localStorage.setItem("user_id", data.user.id);
                    window.location.href = '/bot';
                } else {
                    document.getElementById('register-error').textContent = response.message || 'Registration failed';
                    document.getElementById('register-error').classList.remove('hidden');
                }
            } catch (error) {
                document.getElementById('register-error').textContent = 'An error occurred. Please try again.';
                document.getElementById('register-error').classList.remove('hidden');
            } finally {
                document.getElementById('register-text').classList.remove('hidden');
                document.getElementById('register-spinner').classList.add('hidden');
            }
        }

        // Mock API function - replace with actual fetch calls to your Python backend
        function fakeApiCall(url, data, delay) {
            return new Promise((resolve, reject) => {
                setTimeout(() => {
                    // Simulation of a successful response
                    const isSuccess = Math.random() > 0.2; // 80% success rate for demo
                    if (isSuccess) {
                        resolve({
                            success: true,
                            message: url.includes('login') ? 'Login successful' : 'Registration successful'
                        });
                    } else {
                        resolve({
                            success: false,
                            message: url.includes('login') ? 'Invalid credentials' : 'Email already exists'
                        });
                    }
                }, delay);
            });
        }

        // Password match validation
        const registerPassword = document.getElementById('register-password');
        const registerConfirm = document.getElementById('register-confirm');
        
        function validatePasswordMatch() {
            if (registerPassword.value && registerConfirm.value) {
                if (registerPassword.value !== registerConfirm.value) {
                    registerConfirm.setCustomValidity("Passwords don't match");
                } else {
                    registerConfirm.setCustomValidity('');
                }
            }
        }
        
        registerPassword.addEventListener('keyup', validatePasswordMatch);
        registerConfirm.addEventListener('keyup', validatePasswordMatch);
    </script>
</body>
</html>

