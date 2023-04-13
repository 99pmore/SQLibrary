<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <script src="https://kit.fontawesome.com/cce30af7f6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    body::-webkit-scrollbar {
        background: rgb(240 253 250);
        width: 10px;
    }

    body::-webkit-scrollbar-thumb {
        background: rgb(8 145 178);
    }

    body::-webkit-scrollbar-thumb:hover {
        background: rgb(21 94 117);
    }
</style>

<body class=" bg-teal-50">

    <?php require_once('header.php'); ?>
    
    <main>
        
        <?php require_once('./routing.php'); ?>

    </main>

</body>
</html>