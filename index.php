<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Oxanium:wght@200&display=swap" rel="stylesheet">
</head>

<?php $url = "../aavhan/img/7-page-001.jpg" ?>

<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>

<style>

@font-face {
    font-family: 'grubby';
    src: url('Incognitype.ttf');
}

::selection {
    color: white;
    background-color: red;
}

::placeholder {
    color: white;
    transition: ease 0.3s;
}

p {
    margin: 0;
    font-size: 20px;
}

body {
    background: url("../aavhan/img/shapelined-K9QHL52rE2k-unsplash.jpg") no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    color: white;
    font-family: 'Audiowide', cursive;
}

#img {
    text-align: center;
}

#ques {
    width: 100%;
    border-radius: 15px;
}

#text {
    text-align: center;
    margin: auto;
}

#ans {
    width: 100%;
    background-color: grey;
    text-align: center;
    border-radius: 10px 0 0 10px;
    text-transform: uppercase;
    border-top: 5px solid red;
    border-bottom: 5px solid red;
    border-left: 5px solid red;
    border-right: 0;
    padding: 10px;
    outline: 0;
    color: white;
    font-size: 18px;
    transition: ease 0.5s;
}

#ans:focus {
    border-top: 5px solid white;
    border-bottom: 5px solid white;
    border-left: 5px solid white;
    color: white;
    background-color: black;
}

#ans:focus::placeholder {
    color: black;
}

#anss {
    font-size: 18px;
    width: 100%;
    background-color: grey;
    text-align: center;
    border-radius: 0 10px 10px 0;
    text-transform: uppercase;
    border-top: 5px solid red;
    border-bottom: 5px solid red;
    border-right: 5px solid red;
    border-left: 0;
    padding: 10px;
    outline: 0;
    color: white;
    transition: ease 0.5s;
}

.col-sm-9, .col-sm-3 {
    padding: 0;
}

#anss:hover {
    border-top: 5px solid white;
    border-bottom: 5px solid white;
    border-right: 5px solid white;
    color: white;
    background-color: black;
}

#ansc {
    margin: 2% -1%;
    text-align: center;
}

#outer {
    padding: 2vh 0;
}

#head1 {
    font-size: 2rem;
    font-family: Oxanium, cursive;
    text-align: center;
    margin: 3% 0 0 0; 
    font-weight: 900;
}

#head2 {
    font-size: 2rem;
    text-align: center;
    margin: 0 0 3% 0; 
    font-weight: 900;
    text-transform: uppercase;
}

@media screen and (max-width: 1200px) {

#outer {
    padding: 4vh 0;
}

}

@media screen and (max-width: 990px) {

    #outer {
        padding: 9vh 0;
    }

}

@media screen and (max-width: 576px) {

    #img {
        width: 100%;
    }

    #vertc {
        padding: 0 5%;
    }

    #ques {
        width: 100%;
    }

    #text {
        margin: 2%;
    }

    #img {
        text-align: center;
        padding: 0;
    }

    #outer {
        padding: 6vh 0;
    }

    #ans {
        border-radius: 10px 10px 10px 10px;
        border-top: 5px solid red;
        border-bottom: 5px solid red;
        border-left: 5px solid red;
        border-right: 5px solid red;
    }

    #anss {
        border-radius: 0 0 10px 10px;
        width: 50%;
        border-top: 0;
        border-bottom: 5px solid red;
        border-left: 5px solid red;
        border-right: 5px solid red;
    }
    
    #ans:focus {
        border-top: 5px solid white;
        border-bottom: 5px solid white;
        border-left: 5px solid white;
        border-right: 5px solid white;
    }
    
    #anss:hover {
        border-top: 0;
        border-bottom: 5px solid white;
        border-left: 5px solid white;
        border-right: 5px solid white;
    }

    #qno h3{
        text-align: center;
        font-size: 20px;
    }

}

</style>

<body>
    <html><div id="outer">
        <div class="container">
            <h1 id="head1">IIT Bombay Sports'</h1>
            <h1 id="head2"> Crypt Hunt</h1>
            <div id="qno" class="row">
                <div class="col-sm-8">
                    <h3>Question 1</h3>
                </div>
            </div>
            <hr style="border-top: 2px solid white; margin-top: 0;">
            <div id="vertc" class="row">
                <div id="img" class="col-sm-6">
                    <img draggable="false" id="ques" src="<?php echo $url; ?>">
                </div>
                <div id="text" class="col-sm-6">
                    <p>Lorem Ipsum</p>
                    <p>Lorem Ipsum</p>
                    <p>Lorem Ipsum</p>
                </div>
            </div>
            <div id="ansc" class="row">
                <div class="col-sm-9">
                    <input id="ans" type="text" placeholder="YOUR ANSWER">
                </div>
                <div class="col-sm-3">
                    <button id="anss">Go!</button>
                </div>
            </div>
        </div>
    </div></html>
</body>
