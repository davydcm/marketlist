<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Market List</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body style='background-color: #413f40'>

            <?php echo $__env->yieldContent('conteudo'); ?>
    
            
            <script>
                function registerServiceWorker() {
                    // registrando o service worker para navegadores com suporte
                    if ('serviceWorker' in navigator) {
                        navigator.serviceWorker.register('sw.js', { scope: '/' }).then(() => {
                        console.log('Service Worker registrado com sucesso.');
                        }).catch(error => {
                        console.log('Service Worker falhou:', error);
                        });
                    }
                    }
            </script>
    </body>
    </html><?php /**PATH E:\wamp64\www\compras\resources\views/layout/header.blade.php ENDPATH**/ ?>