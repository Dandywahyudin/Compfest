<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="max-w-xl mx-auto mt-8 p-4 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Customer Reviews</h1>
    <form method="POST" action="/reviews">
        @csrf
        <div class="mb-4">
            <label for="customer_name" class="block text-gray-700">Customer Name</label>
            <input type="text" id="customer_name" name="customer_name" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="star_rating" class="block text-gray-700">Star Rating</label>
            <select id="star_rating" name="star_rating" class="w-full px-3 py-2 border rounded" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="comment" class="block text-gray-700">Comment</label>
            <textarea id="comment" name="comment" class="w-full px-3 py-2 border rounded" required></textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Submit</button>
    </form>
    <div class="mt-8">
        @foreach ($reviews as $review)
            <div class="mb-4 p-4 border rounded shadow">
                <h2 class="text-lg font-bold">{{ $review->customer_name }}</h2>
                <p class="text-yellow-500">Rating: {{ $review->star_rating }} stars</p>
                <p>{{ $review->comment }}</p>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>