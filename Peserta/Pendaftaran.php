<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Registration Form</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet'>
    <style>
        html, body {
            min-height: 100%;
            font-family: 'Roboto', Arial, sans-serif;
            font-weight: bold; 
            color: white; /* Change text color to white for contrast */
            background-color: #f4f4f4; /* Optional: Light background for the whole page */
        }

        h1 {
            margin: 20px 0;
            font-weight: 400;
            text-align: center;
        }

        h3 {
            margin: 12px 0;
            color: white; /* Change to white */
        }

        .main-block {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            padding: 20px;
        }

        form {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            border: 3px solid #000; /* Black border */
            border-radius: 8px;
            background-color: #000; /* Black background */
        }

        fieldset {
            border: none;
            border-top: 2px solid #8ebf42; /* Change to a visible color for the top border */
            margin-bottom: 20px;
            padding: 10px 0;
        }

        .account-details, .personal-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .account-details > div, .personal-details > div {
            width: 100%;
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        label {
            margin-bottom: 5px;
            font-weight: 500;
            color: white; /* Change label color to white */
        }

        input[type="text"], input[type="email"], input[type="password"], select, input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #333; /* Dark background for inputs */
            color: white; /* White text color for inputs */
        }

        input[type="file"] {
            border: none; /* No border for file inputs */
        }

        .gender, .bdate-block {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .gender input, .checkbox input {
            margin-right: 5px;
        }

        .checkbox {
            margin-bottom: 10px;
        }

        .checkbox a {
            color: #1E90FF; /* Keep link color */
        }

        .checkbox a:hover {
            color: #82b534; /* Keep hover color */
        }

        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            background: #0000FF;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background: #0000CC;
        }

        @media (min-width: 568px) {
            .account-details > div, .personal-details > div {
                width: 48%;
            }

            .account-details > div:nth-child(odd), .personal-details > div:nth-child(odd) {
                margin-right: 4%;
            }
        }
    </style>
</head>
<body>
    <div class="main-block">
        <form action="/" method="POST" enctype="multipart/form-data">
            <h1><strong>PENDAFTARAN</strong></h1>

            <!-- Account Details Section -->
            <fieldset>
                <legend><h3>Detail Akun</h3></legend>
                <div class="account-details">
                    <div>
                        <label>Email*</label>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <label>Password*</label>
                        <input type="password" name="password" required>
                    </div>
                    <div>
                        <label>Repeat Email*</label>
                        <input type="email" name="repeat_email" required>
                    </div>
                    <div>
                        <label>Repeat Password*</label>
                        <input type="password" name="repeat_password" required>
                    </div>
                </div>
            </fieldset>

            <!-- Personal Details Section -->
            <fieldset>
                <legend><h3>Data Personal</h3></legend>
                <div class="personal-details">
                    <div>
                        <label>Nama Peserta*</label>
                        <input type="text" name="nama_peserta" required>
                    </div>
                    <div>
                        <label>NO KIS Driver*</label>
                        <input type="text" name="no_kis_driver" required>
                    </div>
                    <div>
                        <label>NO KTA Driver*</label>
                        <input type="text" name="no_kta_driver" required>
                    </div>
                    <div>
                        <label>No Telepon*</label>
                        <input type="text" name="no_telepon" required>
                    </div>
                    <div>
                        <label>Alamat*</label>
                        <input type="text" name="alamat" required>
                    </div>
                    <div>
                        <label>Kota*</label>
                        <input type="text" name="kota" required>
                    </div>
                    <div>
                        <label>Provinsi*</label>
                        <select name="provinsi" required>
                            <option value="" disabled selected></option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Tangerang">Tangerang</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                        </select>
                    </div>
                    <div>
                        <label>Kategori Driver*</label>
                        <select name="kategori_driver" required>
                            <option value="" disabled selected></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="NS">NS</option>
                        </select>
                    </div>
                    <!-- Section for Uploading Photos -->
                    <div>
                        <label>Pass Foto (4 X 6)</label>
                        <input type="file" name="photos[]" accept="image/*" required>
                    </div>
                    <div>
                        <label>KTA Driver</label>
                        <input type="file" name="photos[]" accept="image/*" required>
                    </div>
                    <div>
                        <label>KIS Driver</label>
                        <input type="file" name="photos[]" accept="image/*" required>
                    </div>
                    <div>
                        <label>SIM Driver</label>
                        <input type="file" name="photos[]" accept="image/*" required>
                    </div>
                    <div>
                        <label>Kelamin</label>
                        <div class="gender">
                            <input type="radio" value="male" id="male" name="gender" required>
                            <label for="male">Laki-Laki</label>
                            <input type="radio" value="female" id="female" name="gender" required>
                            <label for="female">Perempuan</label>
                        </div>
                    </div>
                    <div>
                        <label>Tanggal Lahir</label>
                        <div class="bdate-block">
                            <select name="day" required>
                                <option value="" disabled selected>Tanggal</option>
                                <!-- Days -->
                                <!-- Use a loop if generating dynamically -->
                                <?php for ($i = 1; $i <= 31; $i++): ?>
                                    <option value="<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
                                <?php endfor; ?>
                            </select>
                            <select name="month" required>
                                <option value="" disabled selected>Bulan</option>
                                <!-- Months -->
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <input type="text" name="year" placeholder="Year" required>
                        </div>
                    </div>
                </div>
            </fieldset>

            <!-- Terms and Mailing Section -->
            <fieldset>
                <legend><h3>Terms and Mailing</h3></legend>
                <div class="terms-mailing">
                    <div class="checkbox">
                        <input type="checkbox" name="terms" required>
                        <span>I accept the <a href="#" style="color: #1E90FF;">Privacy Policy</a></span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="offers">
                        <span>I want to receive personalized offers</span>
                    </div>
                </div>
            </fieldset>

            <!-- Submit Button -->
            <button type="submit">Daftar</button>
        </form>
    </div>
</body>
</html>
