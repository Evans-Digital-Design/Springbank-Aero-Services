<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Square Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link id="favicon" rel="icon" href="https://cdn.glitch.com/4c9bc573-ca4c-48de-8afe-501eddad0b79%2Fsquare-logo.svg?1521834224783" type="image/x-icon">
</head>
<body class="bg-gray-100">
    <header class="container mx-auto py-4 text-center">
        
    </header>
    <div class="container mx-auto flex justify-center items-center h-screen">
        <form class="bg-white p-8 rounded-lg shadow-md" method="post" action="checkout.php">
            <!-- Your form content goes here -->
            <h1 class="text-3xl font-bold">Checkout</h1>
            <div class="text-center mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full border-2 border-blue-500">
                    Confirm Checkout
                </button>
            </div>
        </form>
    </div>
</body>
</html>
