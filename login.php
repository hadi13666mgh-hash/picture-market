<?php include 'header.php' ?>

    <main class="container">
        <section class="login-section">
            <h2>Sign Up or Log In</h2>

            <div class="form-box">
                <h3>Sign Up</h3>
                <form id="signupForm">
                    <input type="text" id="suUser" placeholder="Username" required>
                    <input type="password" id="suPass" placeholder="Password" required>
                    <button type="submit">Create Account</button>
                </form>
            </div>

            <div class="form-box">
                <h3>Log In</h3>
                <form id="loginForm">
                    <input type="text" id="liUser" placeholder="Username" required>
                    <input type="password" id="liPass" placeholder="Password" required>
                    <button type="submit">Log In</button>
                </form>
            </div>

            <p id="msg" class="message"></p>
        </section>
    </main>

    <script>
        
        let savedUser = "";
        let savedPass = "";

        document.getElementById("signupForm").addEventListener("submit", e => {
            e.preventDefault();
            savedUser = document.getElementById("suUser").value.trim();
            savedPass = document.getElementById("suPass").value;
            document.getElementById("msg").textContent = "Account created! You can now log in.";
            e.target.reset();
        });

        document.getElementById("loginForm").addEventListener("submit", e => {
            e.preventDefault();
            const user = document.getElementById("liUser").value.trim();
            const pass = document.getElementById("liPass").value;
            if (user === savedUser && pass === savedPass && savedUser !== "") {
                document.getElementById("msg").textContent = `Welcome, ${user}!`;
            } else {
                document.getElementById("msg").textContent = "Wrong username or password. Sign up first.";
            }
            e.target.reset();
        });
    </script>
<?php include 'footer.php' ?>