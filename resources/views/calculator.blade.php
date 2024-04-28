<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="/calculate" method="post">
        @csrf
        <input type="number" step="0.01" name="num1" required>
        <select name="operator" required>
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number"  step="0.01" name="num2" required>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
