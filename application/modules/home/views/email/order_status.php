<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Evershine Newsletter</title>
    <style>
        /* Reset some default styles for email clients */
        body, table, td, p, a {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td {
            padding: 20px;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        /* Header styles */
        .header {
            background-color: #007BFF;
            color: #FFFFFF;
        }
        .header-logo {
            width: 150px;
            height: auto;
        }
        /* Content styles */
        .content {
            background-color: #FFFFFF;
            padding: 30px;
        }
        /* Footer styles */
        .footer {
            background-color: #007BFF;
            color: #FFFFFF;
            padding: 20px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="header">
                <img src="<?php echo base_url('frontfiles/assets/pages/img/logo.png'); ?>" style="width: 80px; height:50px;" alt="Evershine Logo" class="header-logo">
                <h1>Welcome to Evershine!</h1>
            </td>
        </tr>
        <tr>
            <td class="content">
                <h2>New Arrivals</h2>
                <p>Discover our latest products and enjoy great deals.</p>
                <a href="#">Shop Now</a>
            </td>
        </tr>
        <tr>
            <td class="footer">
                <p>Contact Us: contact@evershine.com</p>
                <p>Follow us on <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a></p>
            </td>
        </tr>
    </table>
</body>
</html>
