<!-- පියවර 1: පේමන්ට් ගේට්වේ එකක් තෝරා ගන්න
පේමන්ට් ගේට්වේ සපයන්නන් අතරින් ඔබේ අවශ්‍යතා හා සුදුසුකම් අනුව එකක් තෝරා ගන්න. ජනප්‍රිය විකල්ප වලට පහත සඳහන් වෙයි:

PayPal
Stripe
Square
Authorize.Net
පියවර 2: ගිණුමක් සාදන්න
තෝරාගත් පේමන්ට් ගේට්වේ සපයන්නා හීදී ගිණුමක් සාදන්න. ඔබේ වෙබ් අඩවිය සහ ව්‍යාපාරය පිළිබඳ විස්තර ලබා දීමට සූදානම් වන්න.

පියවර 3: API යතුරු ලබා ගන්න
ඔබේ ගිණුම සාර්ථකව නිර්මාණය කළ පසු, ඔබට API යතුරු (API keys) සහ ආරක්ෂිත තොරතුරු (secret keys) ලැබෙනු ඇත. මෙම යතුරු ඔබේ පේමන්ට් ගේට්වේ එකට සම්බන්ධ වීමට භාවිතා කරයි.

පියවර 4: API ලේඛන අධ්‍යයනය කරන්න
තෝරාගත් පේමන්ට් ගේට්වේ සපයන්නාගේ API ලේඛන සහ උදාහරණ අධ්‍යයනය කරන්න. මෙහිදී ඔබට API කතාමාලාව (API endpoints), ප්‍රමාණය සහ ආරක්ෂාව පිළිබඳ විස්තර සෙවිය හැක.

පියවර 5: පේමන්ට් පද්ධතිය ඒකාබද්ධ කරගන්න
HTML
ඔබේ checkout පත්‍රිකාවක් නිර්මාණය කරන්න: -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment getway</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="process_payment.php" method="POST">
        <input type="text" name="card_number" placeholder="Card Number" required>
        <input type="text" name="expiry_date" placeholder="MM/YY" required>
        <input type="text" name="cvc" placeholder="CVC" required>
        <button type="submit">Pay Now</button>
    </form>

    <script src="script.js"></script>
</body>

</html>