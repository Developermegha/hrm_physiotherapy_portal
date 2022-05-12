<html>

    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <style>
            html,
            body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                font-family: "Poppins", sans-serif;
            }
            .container {
                width: 100%;
                height: 100%;
                font-size: 16px;
                padding-top: 10%;

                background: rgb(255, 194, 254);
                background: linear-gradient(
                    10deg,
                    rgba(255, 194, 254, 1) 0%,
                    rgba(62, 106, 201, 1) 100%
                    );
            }

            .card {
                width: 100%;
                max-width: 400px;
                height: auto;
                color: rgb(255, 255, 255);
                box-sizing: content-box;
                margin: 0 auto 0 auto;
                border-radius: 4px;
                border: 1px solid rgba(255, 255, 255, 0.5);
                padding: 1rem 1.5rem 2rem 1.5rem;
                -webkit-backdrop-filter: blur(50px);
                backdrop-filter: blur(50px);
                box-shadow: inset 0 -1em 1em rgba(255, 255, 255, 0.1),
                    0 0 0 1px rgba(255, 255, 255, 0.1), 0.3em 0.2em 3em rgba(0, 0, 0, 0.2);
            }
            p.title {
                font-size: 1.25rem;
                text-align: center;
                letter-spacing: 0.2rem;
            }
            .card--header {
                padding-bottom: 1rem;
            }

            .card--body {
                width: 100%;
                padding-bottom: 1rem;
            }
            label {
                display: block;
                font-family: sans-serif;
                font-size: 0.75rem;
                margin-bottom: 0.5rem;
                letter-spacing: 0.2rem;
                text-transform: uppercase;
            }
            input {
                box-sizing: border-box;
                display: block;
                margin-bottom: 1.25rem;
                color: #4a4a4a;
                font-size: 1rem;
                width: 100%;
                height: 44px;
                lign-height: 44px;
                padding-left: 0.8rem;
                background-color: rgba(255, 255, 255, 0);
                border: 1px solid rgba(255, 255, 255, 1);
                border-radius: 4px;
                transition: background-color 0.3s;
            }
            input:hover,
            input:focus {
                background-color: rgba(255, 255, 255, 0.5);
            }
            select {
                box-sizing: border-box;
                display: block;
                margin-bottom: 1.25rem;
                color: #4a4a4a;
                font-size: 1rem;
                width: 100%;
                height: 44px;
                lign-height: 44px;
                padding-left: 0.8rem;
                background-color: rgba(255, 255, 255, 0);
                border: 1px solid rgba(255, 255, 255, 1);
                border-radius: 4px;
                transition: background-color 0.3s;
            }
            select:hover,
            select:focus {
                background-color: rgba(255, 255, 255, 0.5);
            }


            .card--footer {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .btn_sign-up {
                font-size: 1.25rem;
                padding: 1rem 2rem;
                /*   width: 100%; */
                background-color: rgba(255, 255, 255, 0.8);
                color: rgba(0, 0, 0, 0.5);
                font-size: 1rem;
                border: 1px solid transparent;
                border-radius: 2rem;
                font-weight: bold;
                text-transform: uppercase;
                transition: background-color 0.3s;
            }

            .btn_sign-up:hover {
                background-color: rgba(255, 255, 255, 0.2);
                border: 1px solid rgba(255, 255, 255, 1);
                color: rgb(255, 255, 255);
            }

        </style>
    </head>

    <body>
        <div class="container">
            <div class="card">

                <div class="card--header">
                    <p class="title">DMSF IMD STUDENT DATABASE</p>
                </div>
                <div class="card--body">
                    <label>User Type</label>
                    <select id="userType" required="">
                        <option value="">Select Here...</option>
                        <option value="Counseling">Counseling</option>
                        <option value="Verification">Verification</option>
                        <option value="Correction">Correction</option>
                        <option value="Finance">Finance</option>
                        <option value="Submission">Submission</option>
                    </select>
                    <label>User Name</label>
                    <input type="text" id="userName" required="">
                    <label>Password</label>
                    <input type="password" id="password" required="">
                </div>
                <div class="card--footer">
                    <button type="submit" onclick="login()" class="btn_sign-up">login</button>
                </div>

            </div>
        </div>
    </body>
    <script src="myjs/studentListJs.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
</html>