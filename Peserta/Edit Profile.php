<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet'>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #1E90FF;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        fieldset {
            border: none;
            margin-bottom: 20px;
            padding: 0;
        }
        legend {
            font-weight: bold;
            color: #1E90FF;
            margin-bottom: 10px;
        }
        label {
            margin-bottom: 5px;
            font-weight: 500;
            display: block;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="file"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="file"] {
            border: none; /* Remove border for file input */
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #1E90FF;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #1C86EE; /* Darker blue on hover */
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <form action="/update-profile" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Personal Information</legend>
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="Enter your phone number">

                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter your address">
                
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="Enter your city">

                <label for="province">Province</label>
                <select id="province" name="province" required>
                    <option value="" disabled selected>Select your province</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                </select>

                <label for="profile_picture">Profile Picture</label>
                <input type="file" id="profile_picture" name="profile_picture" accept="image/*">
            </fieldset>

            <fieldset>
                <legend>Account Security</legend>
                <label for="current_password">Current Password*</label>
                <input type="password" id="current_password" name="current_password" placeholder="Enter your current password" required>

                <label for="new_password">New Password</label>
                <input type="password" id="new_password" name="new_password" placeholder="Enter new password (leave blank if not changing)">

                <label for="repeat_password">Repeat New Password</label>
                <input type="password" id="repeat_password" name="repeat_password" placeholder="Repeat new password">
            </fieldset>

            <button type="submit">Update Profile</button>
        </form>
    </div>
</body>
</html>
