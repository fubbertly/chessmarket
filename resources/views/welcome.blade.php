<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Market</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        @include('components.header')

        <main class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Recommended</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Chess Piece Pack -->
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <img src="https://www.chesshouse.com/cdn/shop/files/4-burnt-grandmaster-chess-pieces-31231369576535.jpg?v=1706650608&width=2048" alt="Chess Piece Pack" class="w-full h-48 object-cover rounded-md">
                    <h3 class="mt-4 text-xl font-semibold">Chess Piece Pack</h3>
                    <p class="mt-2 text-gray-600">High-quality wooden chess pieces.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold">$25.00</span>
                        <a href="#chess-piece-pack" class="bg-blue-500 text-white px-4 py-2 rounded-md">Learn More</a>
                    </div>
                </div>
                <!-- Chess Board -->
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHy36xs1-5kP04uvEXtuJe52L9L3vQwX3LGA&s" alt="Chess Board" class="w-full h-48 object-cover object-center rounded-md ">
                    <h3 class="mt-4 text-xl font-semibold">Chess Board</h3>
                    <p class="mt-2 text-gray-600">Standard tournament-size chess board.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold">$30.00</span>
                        <a href="#chess-board" class="bg-blue-500 text-white px-4 py-2 rounded-md">Learn More</a>
                    </div>
                </div>
                <!-- Chess Clock -->
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <img src="https://m.media-amazon.com/images/I/81Td8SL++mL._AC_UF1000,1000_QL80_.jpg" alt="Chess Clock" class="w-full h-48 object-cover rounded-md">
                    <h3 class="mt-4 text-xl font-semibold">Chess Clock</h3>
                    <p class="mt-2 text-gray-600">Digital chess clock with timer.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold">$20.00</span>
                        <a href="#chess-clock" class="bg-blue-500 text-white px-4 py-2 rounded-md">Learn More</a>
                    </div>
                </div>
            </div>
        </main>

        @include('components.footer')
    </div>
</body>
</html>
