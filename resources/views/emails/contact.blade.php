<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Mensaje de Contacto</title>
</head>
<body style="font-family: sans-serif; color: #333; line-height: 1.6; background-color: #f9f9f9; padding: 20px;">
    <div style="max-w: 600px; margin: 0 auto; bg-color: #fff; background: #fff; padding: 30px; border-radius: 8px; border: 1px solid #eee;">
        <h2 style="color: #111; border-b: 2px solid #f0f0f0; padding-bottom: 10px;">Nuevo mensaje del portafolio</h2>
        
        <p><strong>Nombre:</strong> {{ $formData['name'] }}</p>
        <p><strong>Email:</strong> {{ $formData['email'] }}</p>
        
        <div style="margin-top: 20px; padding: 15px; background-color: #f5f5f5; border-radius: 4px;">
            <p style="margin-top: 0; font-weight: bold;">Mensaje:</p>
            <p style="white-space: pre-wrap;">{{ $formData['message'] }}</p>
        </div>
    </div>
</body>
</html>