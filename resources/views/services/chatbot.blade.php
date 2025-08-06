@extends('layouts.app')

@section('title', 'Chatbot')

@section('content')
    <div class="container">
        <div class="chatbot-container">
            <header class="header">
                <div class="header-title">
                    <img src="{{ asset('images/bot-logo.png') }}" alt="Bot Logo" class="header-logo">
                    <div>
                        <h1 style="margin: 0; font-size: 1.5rem;">Astrology AI Assistant</h1>
                        <div class="bot-status" style="display: flex; align-items: center; gap: 0.5rem;">
                            <div class="status-indicator"></div>
                            <span style="font-size: 0.9rem; color: #555;">Online</span>
                        </div>
                    </div>
                </div>
                <div class="controls">
                    <button id="logout" class="theme-toggle">
                        Logout
                    </button>
                </div>
            </header>


            <div class="chat-container" id="chatContainer">
                <div class="bot-message-section">
                    <div class="bot-default-message">
                        <!-- default bot message section start -->
                        <div class="bot-logo">
                            <!-- bot logo -->
                            <img src="{{ asset('images/bot-logo.png') }}">
                        </div>
                        <div class="bot-message">
                            <p>Hello 👋 I'm your personal astrology assistant.</p>
                            <p>To begin, please tell me your name, date of birth, time of birth, and birth place. ✨</p>
                        </div>
                        <!-- default bot message section end -->
                    </div>

                    <div class="user-input-section" >
                        <div class="bot-default-message">
                            <!-- ai reply section start -->
                            <div class="bot-logo">
                                <!-- bot logo -->
                            </div>
                            <div class="bot-message">
                                <form id="userInfoForm">
                                    <div class="form-group">
                                        <label>Your Name:</label>
                                        <input type="text" id="userName" placeholder="Your Name" class="form-control" required> <br>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Date of Birth:</label>
                                        <input type="date" id="userDOB" class="form-control" required> <br>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Birth Time:</label>
                                        <input type="time" id="birthtime" class="form-control" required> <br>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Birth Place:</label>
                                        <input type="text" id="birthplace" placeholder="Your Birth Place" class="form-control" required> <br>
                                    </div>
                                    <button type="submit" class="send-button">
                                        <span>Submit</span>
                                    </button>
                                </form>
                            </div>
                            <!-- ai reply section end -->
                        </div>
                    </div>

                    <div class="bot-question-message" style="display: none;">
                        <div class="bot-default-message">
                            <!-- ai reply section start -->
                            <div class="bot-logo">
                                <!-- bot logo -->
                                <img src="{{ asset('images/bot-logo.png') }}">
                            </div>
                            <div class="bot-message">
                                <p>Thanks for sharing your birth details! 📝</p>
                                <p>Now you can ask me questions about your career, love life, health, finances, or anything else. 🔮</p>
                            </div>
                            <!-- ai reply section end -->
                        </div>
                    </div>

                </div>
            </div>

            <div class="typing-indicator">
                <div class="typing-dots">
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                    <div class="typing-dot"></div>
                </div>
            </div>

            <div class="input-container">
                <div class="input-wrapper">
                    <input type="text" class="message-input" id="userQuestion" placeholder="Type your question..." aria-label="Message input" style="display: none;">
                    <div class="action-buttons">
                        <button class="send-button" id="sendQuestionButton" style="display: none;">
                            <span>Send</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let userName = '';
        let userDOB = '';
        let birthtime = '';
        let birthplace = '';
        const BACKEND_API_URL = "{{ env('BACKEND_API_URL') }}"

        document.addEventListener('DOMContentLoaded', function () {
            userName = localStorage.getItem("username");
            userDOB = localStorage.getItem("userdob");
            birthtime = localStorage.getItem("birthtime");
            birthplace = localStorage.getItem("birthplace");
            userId = localStorage.getItem("user_id");


            if (userName && userDOB && birthtime && birthplace) {
                document.querySelector('.user-input-section').style.display = 'none';
                document.querySelector('.bot-question-message').style.display = 'block';
                document.getElementById('userQuestion').style.display = 'block';
                document.querySelector('.action-buttons').style.display = 'flex';
                document.getElementById('sendQuestionButton').style.display = 'block';
            } else {
                document.querySelector('.user-input-section').style.display = 'block';
            }

            fetch(`${BACKEND_API_URL}/history/${userId}`)
                .then(res => res.json())
                .then(data => {
                    // ✅ Save user info to localStorage if not already set
                    if (!userName && data.user?.name) {
                        localStorage.setItem("username", data.user.name);
                        userName = data.user.name;
                    }
                    if (!userDOB && data.user?.dob) {
                        localStorage.setItem("userdob", data.user.dob);
                        userDOB = data.user.dob;
                    }
                    if (!birthtime && data.user?.birth_time) {
                        localStorage.setItem("birthtime", data.user.birth_time);
                        birthtime = data.user.birth_time;
                    }
                    if (!birthplace && data.user?.birth_place) {
                        localStorage.setItem("birthplace", data.user.birth_place);
                        birthplace = data.user.birth_place;
                    }

                    if(userName && userDOB && birthtime && birthplace) {
                        document.getElementById('userQuestion').style.display = 'block';
                        document.querySelector('.action-buttons').style.display = 'flex';
                        document.getElementById('sendQuestionButton').style.display = 'block';
                    }

                    // Proceed to load chat history
                    const chatContainer = document.getElementById("chatContainer");
                    const sortedHistory = data.history.sort((a, b) => new Date(a.timestamp) - new Date(b.timestamp));

                    sortedHistory.forEach(chat => {
                        const userMsg = document.createElement("div");
                        userMsg.className = "user-message bot-default-message";
                        userMsg.innerHTML = `
                            <div class="user-message"><p>${chat.question}</p></div>
                            <div class="user-logo"><img src="{{ asset('images/user-logo.png') }}"></div>
                        `;
                        chatContainer.appendChild(userMsg);

                        const botMsg = document.createElement("div");
                        botMsg.className = "bot-default-message";
                        botMsg.innerHTML = `
                            <div class="bot-logo"><img src="{{ asset('images/bot-logo.png') }}"></div>
                            <div class="bot-message"><p>${chat.answer}</p></div>
                        `;
                        chatContainer.appendChild(botMsg);

                    });

                    chatContainer.scrollTop = chatContainer.scrollHeight;
                });


        document.getElementById('userInfoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            userName = document.getElementById('userName').value;
            userDOB = document.getElementById('userDOB').value;
            birthtime = document.getElementById('birthtime').value;
            birthplace = document.getElementById('birthplace').value;

            if (userName) localStorage.setItem("username", userName);
            if (userDOB) localStorage.setItem("userdob", userDOB);
            if (birthtime) localStorage.setItem("birthtime", birthtime);
            if (birthplace) localStorage.setItem("birthplace", birthplace);

            document.querySelector('.user-input-section').style.display = 'none';
            document.querySelector('.bot-question-message').style.display = 'block';
            document.getElementById('userQuestion').style.display = 'block';
            document.querySelector('.action-buttons').style.display = 'flex';
            document.getElementById('sendQuestionButton').style.display = 'block';
        });

        document.getElementById('sendQuestionButton').addEventListener('click', function () {
            const question = document.getElementById('userQuestion').value.trim();
            if (!question) return;

            const chatContainer = document.getElementById("chatContainer");

            // Add user's question to the chat
            const userMsg = document.createElement("div");
            userMsg.className = "user-message bot-default-message";
            userMsg.innerHTML = `<div class="user-message"><p>${question}</p></div><div class="user-logo"><img src="{{ asset('images/user-logo.png') }}" alt="user-logo"></div>`;
            chatContainer.appendChild(userMsg);

            // Show typing indicator
            document.querySelector('.typing-indicator').style.display = 'block';

            fetch('http://127.0.0.1:5000/api/ask', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    user_id: localStorage.getItem("user_id"),
                    name: localStorage.getItem("username"),
                    dob: localStorage.getItem("userdob"),
                    time: localStorage.getItem("birthtime"),
                    place: localStorage.getItem("birthplace"),
                    question: question
                })
            })
            .then(response => response.json())
            .then(data => {
                // Hide typing indicator
                document.querySelector('.typing-indicator').style.display = 'none';

                const botMsg = document.createElement("div");
                botMsg.className = "bot-default-message";
                botMsg.innerHTML = `
                    <div class="bot-logo">
                        <img src="{{ asset('images/bot-logo.png') }}">
                    </div>
                    <div class="bot-message"><p>${data.answer}</p></div>
                `;
                chatContainer.appendChild(botMsg);
                document.getElementById('userQuestion').value = '';
                chatContainer.scrollTop = chatContainer.scrollHeight;
            })
            .catch(error => {
                console.error("Error:", error);
                document.querySelector('.typing-indicator').style.display = 'none';
            });
        });

        document.getElementById('logout').addEventListener('click', function () {
            if(userId) {
                localStorage.clear();
                window.location.href = '/login';
            }
        });

    });
    </script>


@endsection