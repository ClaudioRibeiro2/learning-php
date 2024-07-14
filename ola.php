<!DOCTYPE html>
<html>
    <head>
        <title>Teste PHP</title>
    </head>
    <body>
        <?php echo "<p>Olá Mundo Cruel! Primeiro Código em PHP</p>"; ?>
        
        <?php if ($expression == true): ?>
                Isso irá aparecer se a expressão for verdadeira.
        <?php else: ?>
                Senão isso irá aparecer.
        <?php endif; ?>

        <?php phpinfo(); ?>
    </body>
</html>
