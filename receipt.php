<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .receipt {
            width: 300px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
        }

        .header p {
            margin: 10px 0;
            font-size: 14px;
        }

        .item-list {
            margin-top: 20px;
        }

        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .total {
            margin-top: 20px;
            text-align: right;
            font-size: 18px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="receipt">
        <div class="header">
            <h2>Receipt</h2>
            <p>123 Main Street, City, Country</p>
        </div>
        <div class="item-list">
            <div class="item">
                <span>Item 1</span>
                <span>$10.00</span>
            </div>
            <div class="item">
                <span>Item 2</span>
                <span>$20.00</span>
            </div>
            <div class="item">
                <span>Item 3</span>
                <span>$15.00</span>
            </div>
        </div>
        <div class="total">
            <span>Total:</span>
            <span>$45.00</span>
        </div>
        <div class="footer">
            <p>Thank you for your purchase!</p>
        </div>
    </div>
</body>

</html>