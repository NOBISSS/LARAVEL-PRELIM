<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html>
<head><title>404 Not Found</title></head>
<body>
    <h1>404 — Page Not Found</h1>
    <p>{{ $exception->getMessage() }}</p>
    <a href="/students">← Go Back</a>
</body>
</html>