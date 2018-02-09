<?php require 'includes/common.php' ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootcss.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .add_margin{
                margin-top:100px;
            }
            .jumbotron {
    background-color:darkgrey !important; 
}
        </style>
    </head>
    <body>
        
        <?php include 'includes/header.php' ?>
        <?php include 'includes/check_if_added.php' ?>
        <div class="container">
            <div class="jumbotron home-spacer add_margin">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpp49lJiokzOkVwGUREK9SibclKnXy5qowIhdEuLP0gG9blcVX" class="img-responsive img-thumnail">
                            <div class="caption">
                                <h3>SONY ES3</h3>
                                <p>Price:RS.36,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(1)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="data:image/jpeg;base64,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" class="img-responsive">
                            <div class="caption">
                                <h3>CANON K4</h3>
                                <p>Price:Rs.20,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(2)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="data:image/jpeg;base64,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" class="img-responsive">
                            <div class="caption">
                                <h3>SONY E29</h3>
                                <p>Price:Rs.43,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(3)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhITExIWFRUXGBcVFxYYFRcXFRcXFRUWFxUVFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGA8QGi0dFR0tLSsrKy0rLS0tLSstLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKy0tLystLv/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAEAAIDBQYBBwj/xAA/EAABAwIDBQQIAgoCAwEAAAABAAIDBBESITEFBkFRYSJxgZETMkJSobHB0QfwFBUjM2JygpKi4STCQ7LxNP/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACURAQEAAgICAgICAwEAAAAAAAABAhEDEiExE0EEUWFxIiMyFP/aAAwDAQACEQMRAD8AuHN5qNzVO4JoiJ0C4I9OhJY1CHEaKwNG++iY7Zzk9JDtnvr5p4kUNRSPbqMkOyXgjqJkPD80yXoo2SX71LTNu7pxSV7W2xKP2nDM6dy0ML+irqR+S6akjJFq5PoXUVCBq3XCjlnvkhp5clJMtvAzO6zkzlfbflWcmK6OP0w5fYaoeg6KnM0rW8L3PcnVkivt0qHC0yEZu07lWeXWM+PHtlpttmxhrQBoAArKJBUIyR7AvNyejHlH4lyXqzbg1oWOK0m/R/5cves0V6fDP8I8vmu86V0guLq1ZHNXqP4T7WBjfTyWAacTHZe3e7T4gnxXlgWv3AqWh8jD7QBH9JNx/l8FGfpfHN5R7JV0vGygfTtcNEBs7bj2DC4Y28PeH3CsDXMIuy3dcX8lj4ehjLPFUkmz42yB2Bt+eEK7FMMOQt3BDzODheyJ2WXO7Njlx6d6PcVf2H0KIjKmqoRfqoaY55qNH7McdUJJCCTcahWEjc/AoV9roTYz20d1aaYdqMNd7zOyfhkVjtr7iTRguiPpWjhaz/LQr1GM5pOarxzsY5cWOTwOaBzSQ5paRqCLHyKYCva9rbFhnBEjAeR0cO4rBbX3GlZcwn0jeRyd9itseSVzZcNnplLrimqKR8Zs9jmn+IEfNRWVsdPeNu1HoYXyBty0ZDhc5C68rqN9qwvykDRya0Afdem77G1JJ1sPjf6FeHSesVz8MldfPlZrTabM23PK4B8rjfqR8lodsvLIsTXOB5hzvusTu479o1breZtqcZcF1dZpydsv2yh21Np6V/8Ac77rg2m/3j5qqJ6rt9EusHarf9bSAE4jz4KbYG8lRLI1jnAAkAkNAJ01PiqM5iyVADE4PY6xBuLgFHSfo5yZT1VhXbQe9kz3PJc2ZzAb2Ia1rbAJ+zt/6iJjGOayRrbNBOLF3k3zVFUbOxuJMh7RLjlxOZUb9l2sA/Tpy8VNwl8aV8lnnbfyb3yNDSWMzaHceI71Cd8S72G+BKy9TNiwNOQa1rD1wi10UNltDxg9Qi5JytZt+J6FL4sf0Plz/Yuu2p6Q3IsgpJL8UKiv0NwAc4YWnME5XHMX1CqYSFeTK+wjqXE4XcLXz1vbitrV7w0jImNY14LQBnhAyHO6wFZtcDsxD+o/RVMspcbuN+9RnxY5e14c2WPpuZ9/nNyY0eV/iclXyb+VR0cR5D5BZLFySz5JTiwn0V5c79rip2sZXF0kbXOOpOq4GRu1it/K4j5qsY1/AImKoe3Vht3LSRnbanfs1h9V5b0eMv7ghZqCRurbjm3tDzCs6TakejsvkinvA7THW7tD3jRBM76J3unyKIoZnxPa9t7g+fMKzbUh2V8Lu84T9lZzbArGuhaGF5muIvRubIJMNi7CWk6Yhe9rI1s5dLag2014Bv4fdW9PW6WKy9duxtCHBjheMTgxpaWvBecgwlhIDr8DZD/q6vD3R+gnxsAc5gicXNB0cQBkDbXosvideP5ep5j0mlqxxRjKxjcx815Q5tezDeOcXzbeKQYsr9nLPLPJAzbeqmuwl7mkGxBFiDxuDoleKq/9Uv09sFaHX0Q7pbFec7F3mlBAeQRztY/BagbVBCy62VtjnL6XLqvqoZKhVBrLqWORCtreB9s+JUwkVYyVTtkujRCsS5kowVI1qAbJStcLEAjkRcKtk3bpSbmmZfoLfAK3xJwenMrE3GUL+IIApbc3tF+8OXhcp7RXtn4hTXpw3j6Rv/q5eJTestOL05vyF/u2f2g8Pmt7vSf+MNeGq8+3cP7Vvh81v97Hf8Zvcun6ck9vPnBJNbmV0lIHNcliXAUrpg+67dRpwQCsiGyOItc2UUaMpacvc1rdT8BzPQJBPsvAwmWRocxmdj6pPC49ruWe3g27JUvLnHs8B0Gnh0RW8NTisyP903IfxEauKoQ0k2HiimYOQ1TvR881LYDIJqQcRQ2dLl2CezjsNQ06EgZjxQqtI9qyi+ENDi0Mc4N7TgG4RcnjYWyQDoNlPxtYSGktLs3GwwucHAkXtbA5E/o0zBezxobEXyN87cuyULBVTAlwdmQQdDk5xeRY5esSUczakwvfO4sbjw4cUAHNIw/vIwf4m9l3+0FJHbON9xxB1HeERX1Je97zkXEk20F1XvKA46U8Vp9yN7TSTse8Y2AOba9iBIA12E+y6wGfRZcuvkfNMIt9EB6WzblFTwTU0Lqh7ah8TnvkYwCJkb8V2Na7tyHnlp0VttL8RYJRWBzXkuilZSzYAyRnpW5wyYXZtB0d8F5VSTXGE6+z9lIU4Tf7F3xazZ8jH1B/So8X6K4xvc6NrxaRokvYYhcNv6vlbzmqmLnlziXOJuSSS4k6kk5k9VKShn+sEqcWLJLWKt6famSpHnIJLLrt0zl6tVR7RubK0irFiIKgt4qxp9oFRcdNsOSZem0gqEdFJdZSmrrq1p61TprK0MZU7CqiCqvxR0M6NGPC7ZQRvupwVA0pvxEqmfo1xqHg5dGu0XjlSyzz3r6AqqNsgLXNBB4EA/NZXaP4exPcXsdgvnhIxN8riy0wzkY8vFcvTzzYdQxjwXOsFr96NuQOha1kgJ8U6Tc6VjhZkZHNrBfxDkzbey7RC+Hu9E0FdEzlnhx5cdxvmMWKlh9pOE7feCKNIzk3+wfQppome6z+0j/sqQhbO3mPNODxwI8047PZ7rf8h9U07OZ7o/ud9kA5sg5pzSo/1azl/n92pw2Y3gXeDx9kbAqMK0o4rRC2TpyWg8WxN/eO7yclQx0rw8NBddxDACQc3ZcPzmtxSbIdM+VzCAyK1OzrgALz4uKfsqoNvRxxwk2HBrR14fdZs0TmNNxa1i88i71W95+h5LT1tG99Y2ItxCFpe5uoJsDY9PUHiVV7fl7LIgb2vLI735ZMyT/K3C3vx80goClHET91NT0xe4NGp/JKtJqMNFhoPzdAVXowE5vcV2R4BsRfoPqn/poHs2QEkZI1aUVFM3nbvyQX6wHIpGtZyKRiqqJp1HjxVTPGR1HNEioHsnwOnhyTHuumAll1ufZPgeRSkbZNIQDRcHqFYNfcA+feg5RcB3gfp8vgpKR2o55+ISCa6Hf6ykdMOahc65TvoQdJoFxgTneykVGK8vZBdBTSuqky6EwVRCsqbaapU4FRcJ9Nseaz36bGkrr6K5o5b8VgaWsIIC0Wzq4LKzTqxzmU3GwikRTZAq/Z8zXD1kcIuqnUVtZxyBNlqOSqpKtE7MmF8R8FnJtpvU2saaMuy81Xbb2Y2VjmnjoRr3qyiqv2nehJaoWVa/Qn+Xi+nk+0KJ0T3MdqNDwI5oZavfCMOAdxB+BWRxLq48u0edz8fTLU9O3SxJq4rYnhyIgOaEBU0B7JKAP2RnUxuOkbXyn+lpI+IC1e6m2oI6aNrngPOJ7783uLj8wsdQOsak8qdw88I+qzDqgi+acuir1LdWpb6DalYSMcrhDHfUekdmQOnpGn+hVNTs5jxoslFXObG1gcbXxW62/+KeHbEjfaRCaTZ2xRHidqXZDoLqr3kfgAaNT+R9/JaCgrcUbHHUtHyWP3hnxzuPLIeGX0RTitaLLtkkkjcIXLJyaSgOFqQ+I+S5dOh9YJA50Nwg1fUlPdo/OiqayHC9w6pkihF7t5j46j4hRwusQeSkZkQeS5ILOcOpSpxZxvZoWNPgEPVSMvYRhp5hJjtOoHwy+iGm9ZBxPO02BCdfgnzDshDiIJYqyTWT0L2m9R8QiI33GRuiJOXE4JJgmlaTY73ANuNRcFZtbPdlglgDTq0kDpxHzWefptw3zppdkRg2uArsxD3VS7Oa5hs4Hv4FaGIAj1iFj2jrY51QlDW248VQmuUTq8cx5qZF7bCPaebTyKbLXC7rcz81i3Vw4SAeIXf1w1ou5480aqpZFpvFUgstzWZxKOo2r6R3QfFK66ePHUef8AkZzLPx9HkqO66U0rRgcSpoz2HIUlSROyd3IAujd/+kc4T8C1ZRzlptnP/aD+Njm+bVmJRYkdSEgKL8h+eCMkoHNibKdHWwgXOXMkCze4m/RVzXZD89Ffxu9JRloFjGblwAzFybOsb+1ra2WqCF0VZaNmfsgeWSp6913k87/MplLP2bck2U38Pkfz8U6IZdcxJt0kGWJcJSSQCUtI27gFErPYcGb5CMmD4/n5oDS7DoMUQdb2n/B7h9Fmd5IMM7x3fIL07ZdMGQxsOoaL/wAxzPxKzVZssPqHyB2eduyHaNDdD+ck6TBtbmEpW9p3h8lqXbvvkmsLGzHPdYBoswWJsABxHBUhpCbm3FKmGcLBvcfmUPL6yIqRZwHIfUoZ57Sn6P7HTeqFG0qSf1QoWuSiskoCjkaG5jTj91I0ps/qnuTSkauqOlPZHTJSJh0hX+6dbgeWe9mO8KgUsEpa4OGoN1OU3FYZdctvYKGe4AKPQWzI7sbzsFaspsly16c08a3kpwyMEE5m2vQrIP1W+3wjAgZYe3/1csDIM1vg4uamrrF1kLjoLpBhBsRZWw2Ip3WKtonKmiGatoNFUSmcmOTzdNITBpK7Ec1yyVkE4yTCQfdN/j+fugNtxYZXEaO7Q8UZVZEO4HJMr2Y4gfaZkf5SlTVcRyIVrsSZ5JiBb2wRnYWOFwuCdDYkeKpmlTxyEEOBzBBHeMwUAfXU/oZXMBJA4lpae+xUd87q0qQ2phxjCJWA4gL9pouTpkLkkjqbXJOVTC7OxyP5+KIDnR8s0zAeRR8DOSILDy+oQFRhPIrljyVrl0+C457RqR+eiYVsURcQAMytNQOY3BG2xaw4nn3n8B4a+AVKaj3cuvHwHBT0swaOQCcJsq7bfo4nO42s3vOipNk7SJY95eLt1BJBz0IPHM2sqOWd072t9kEDpnzOgJ0Cm2ntBmBrIxwDe0AHNAywEWyOQJIPDhmErQ1VDtZvoat4P7SRghYP5zeU+Vv7VUwloZ3C/kqumn9HC951N4ox1d+9f4NNu+RCCtOE9yYC1D7yEqF/rJRakpP9ZRfRwZOcgogpZ9AoAEsV5JQV2T1T3JjV2Y9kqknUuh7ypwFBTDsjz80RHGXGzQSTwAuUj+yAV5sLdyeZzT6M4NSTkCOl8yrbdLdd2MSTNyGbWnnzP2XqFJTZBZZcn1G/Hw/eQHZlIWNAPJW0bRZENhsFC/VYur28W3nN4Wfz/wDVywz25rUV9RjjaORv8CsyR2iujFx8tXe7kAMgBHJXW9uwWhrXtFiqvdv12nqtpvTnC0rXXhhL5eaxU1kbG1SkJWQCumldSPBBGWXQkuXQbj2BwI8kJTzWNj3EdEUEHWtscY8UUBK2nwOtwOYPRQscrBrg9uE+B5FAyRkGx1SMXs2vfC8ObblY5gg8CEVIRUSSSECMWuSLkFxOWLm4k6gdbKqBU8LiCCDpY+I0SPGyZeZuDqeocw4XtOXgR4K1gnaRkR8j5KnnndI7G83J49yc0BOfyWeu16+ltOq6YIeUkaE+aDe4ppEulAXY4ZJA5zWktba54C+iDVqzbha04Bhe5rWOtbAQ29nYR7VsAv0PNBi2VccEdmPBLmftIyMXbAwk4xkBm7LP1RzypMZJLnE3OdzrnxPVQ3/PJNc+6RJpZy63ICwHIJSGwA46n6BNYLDEfAcz9lzCSeKDSQBMf6yIbGbaFQP9ZFODZh2fBDtRMw7B7kHGVOKskoKU2dhzK61pOQzOi0uxt1HOIdMbDgwet/UeHzRlZJ5PDC5XwF2NsZ85y7LeLiPgBxK9D2Du9HEAGi54uOp/0i9l7PawAAAADIBX9LEFhlna7MOKY/27SUIA0VnDHZQsNk901tFDROXoOSTNNlqEK+YIDwiM6qncO0V7rtLcWmkvhZ6N3NuQ8tFgNs/h7UxuJjHpW825O8Wk/Ja48kc/Lw368qndz12rY70fuWqt2BuhVtcHOiwjq5vyutXtTd2WZgaCG99ytfkx17c84c7fTzEhcHVbhn4fP4zD+w/dER7gxj1pXHuAA+qXy4rn42defWSXoUu40PBz/MH6Kk2nudIy5Y7F0OR+yJy408vxs4ypXCVNPEWkhwII1B1CgIWjns04SmuF7jgugrhQSrlaWO6KYSB4s7wPJEzMuCCFVyMLCkpK+IjX/RXWNOoK5DUcPgVMAOB8D90gljnGj2nvbr5KUBp9WVvc8WPmoL88vzzXC0JkdO138J7nIR3h5rskYURYjYdLuvkuYuSaQnthPcOZyCAYpWR2zdpy4n7BLE1vU9foPuo8ROZSNIXEn8+QW13f3TdKGuxtF8AsRpjva/ln3hY2miuRyWmhq42AC/kuv8WY225XSMqvN4d2jBTOlxNI7Iya4Hti4OY7x0IsV568dpaiqrWujcA6+WizEvrBP8zW5qy+PoYLHAXNIAubZBAOjINiCD1FlcbObm1bPZ+wWSAekaHcbHgvPufV1zj7xWbnbE7IlcLuPq/wjn3lbSl2aRmcyjaejDQABYDgEcyNZW23bqwwmM0hpoirFmQ0TGst4KOWWwKSrRLpQhJ6jqhZanqgZZ0UDZKhQuqVXuqEwTo0W2+e4BQSWXmW4W9T7ilmcSP/ABOJzFhnGTxFtO63Jbn9MHNZteTivHl1qwJC7ccVVPq+qglrkRMg6rqwFVmpe82aENNVXRlPVBosrk2q5dRVNZp7YB71JXMY5uJuXMX+SqqqtB4qvZtIgkXV6Rd3zFDvhs7G0vYBjbn3jksB6d/u/Nen7QlGvArDu3feXOIBsSSNdLqsMteHPzcczu4pzO/3UjUO934rSUu6b3a3HirCq3AkDC4O8LlX3Y/B/LFenPL4hMkkuM2q1G69U5zhHGX4dbOHHTInok7dat407/8AE/VV2RePTOvZZJrirar2JUxjE+F7RzIyVaTzCNjo6ycjjZPE/MD5fJR3XCgXFKZW8viVwyN934lRFcLuiNp6pDUW0Fu4KN0pK5i6JB45JjTjVPE0KMOHJPD2+6fNGx1FscE8OugwW+6V27eTkdi6Ua1DTt7QXYYcR7LXHwV9svdKeX1W26uslc4qcWRmxh22DqF6zsmlsASqzdfclsJD5XB7xplZo7uq1bo7aLnyy3XXxTSFpU1wAoS4BDyT9UNk0k6CqalQT1SAnqUFUstQhZJ0DUVaFfObao0jsPfU6qL9I5qrkqT90K+pN+KZyrb8UJY2VkTo8YmbHC5xJb6OwjaWYABivkb3KPk2sbJJLO/9V15T/Tx/0a3at+K5JX34rqSemO0TazqmVe1LZgpJJlfICXbXVBS7SvndJJUYilqHTEMBsLi54AcVtBTMDcrZGw7hokkrwYZexFPVRx2OEE9+SjdtpuYskkmrrLGYm2j6CUvAuMwRfUHMfRGwb2RH1mub5FJJKZMc8Jaw28m2H1EhNzhFw1vADu5lUXokkkttesk076NIRrqSe06jjolGYVxJPaesNMKnp6Au0C6klsTGLyg3aLrXCv6Tcxls1xJTWkkHs3TgHsoxm7cNvUb5JJKdq0kp9ixxm4YB4LTUFOAAkklSymoNdOANULJWJJKYMYDlnQFRUpJKopXT1eqqquv6/wCkklSLQUcl8yU19RidhbnbXokkmk+3Dz+66IwkkgP/2Q==">
                             <div class="caption">
                                <h3>SONY RE4</h3>
                                <p>Price:Rs.65,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(4)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSawxFFXW_vpZU15x0HDvxNDHhsoTy2Xa6pj5-9GrvnOj7iQroQ">
                            <div class="caption">
                                <h3>HMT Milan</h3>
                                <p>Price:Rs.10,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(5)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAqEBIMxps9hXXZBNOXO6-VMi-CMAGIpKXKFA0J5yYvS_WikOsHQ"> 
                            <div class="caption">
                                <h3>Titan Model #456</h3>
                                <p>Price:Rs.20,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(6)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyEOEtyicq4dhttk9KOhsUa-QvmY_9r2R-Zupr1f9t-BoPwFNQGA">
                            <div class="caption">
                                <h3>FaberLuba</h3>
                                <p>Price:Rs.9,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(7)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbw7WBc6fxA9WCtMhceGtBln8bt08yYoOAO5WCq7Z2ZoWSowXL">
                            <div class="caption">
                                <h3>Titan Model #457</h3>
                                <p>Price:Rs.10,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(8)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHPLMAUjoERQuyA9_jywFptcvnLGS2eaFeUTGB7TnRPBUxuVAAuQ">
                            <div class="caption">
                                <h3>H&W</h3>
                                <p>Price:Rs.5,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(9)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsBl7mcAPT8ITrHWXsvfTty7IYG0xgZIZkfbzeezNNsjO44Riv4w">
                            <div class="caption">
                                <h3>TWILLS</h3>
                                <p>Price:Rs.6,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(11)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlpeox9vzkNYoRvmSPFQXFFCf07gYAtBQmN31A-pQUgvUaDYqK">
                            <div class="caption">
                                <h3>LUIS PHIL</h3>
                                <p>Price:Rs.4,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    if (checkifadded(10)) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKok0NuPlVthis-MXEnR8N4iSxI5t8S8itzWBGrK1t0tZkn4j7VA"> 
                            <div class="caption">
                                <h3>JHALSANI</h3>
                                <p>Price:Rs.2,000</p>
                                <?php 
                                    if (!isset($_SESSION['email'])) { ?>    
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>   
                                <?php    } else { 
                                    $si=checkifadded(12);
                                    if ($si) { 
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';      
                                     } else {    ?>              
                                         <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                <?php     }
                                }    ?> 
                             </div>
                     </div>
                </div>
            </div>

        </div>
        <?php include 'includes/footer.php'; ?>
        
    </body>
</html>
