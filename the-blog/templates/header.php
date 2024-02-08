<head>
    <title>The Pizza Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #fbcae0 !important;
            
        }
        .brand-text{
            color: #d891ef !important;
            text-align: left;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

        .pizza{
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }

         .container{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            margin: 0 auto;
        }

        .btn{
            background: #d891ef !important;
        }

        h4, h5{
            color: #d891ef !important;
            font-family: Arial, Helvetica, sans-serif;
        }

        .section{
            font-size: 12px;
        }

        .card-action{
            text-align: center;
            margin: 9%;
        }

        
       

        @media screen and (max-width: 600px) {
            .btn{
                color: blue#e8f4ff !important;
                background-color: #8a2be2 !important;
                text-align: center;
            }
            .brand-text{
            color: #d891ef !important;
            text-align: center !important;
            }

        
        }
    </style>
</head>
  <body class="grey lighten-4">
   <div class="wrapper">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">The Pizza Blog</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="add.php" class="btn" z-depth-0>Add a Pizza</a></li>
            </ul>
        </div>
    </nav>