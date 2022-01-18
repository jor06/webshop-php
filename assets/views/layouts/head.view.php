<!-- HEAD VIEW PHP -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Meatgrinder</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/cart.css">

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/vue/dist/vue.min.js"></script>
    <script src="node_modules/axios/dist/axios.min.js"></script>
    
    <script src="/assets/js/components/cart.js"></script>
    <script src="/assets/js/components/products.js"></script>
</head>
<body>    
    <main id="app" class="content">
        <div class="layer" @click="closeShoppingCart"></div>
        <div class="container-fluid p-0" id="mainPage">

        
            