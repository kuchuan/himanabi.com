<<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" type="text/css" href="/css/create.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
	<title>Document</title>
</head>

<body>
	   <div id="logreg-forms">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">ログイン画面</h1>
          
             <p style="margin:20px;"> <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus=""></p>
             <p style="margin:20px;"><input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""></p>
             <div>
             <p style="margin:20px;"><button type="button-center" class="btn btn-primary">ログイン(普段はこちら)</button></p>

           
           
            </form>

            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>

              <div class="btn-group" role="group" aria-label="基本のボタングループ">
                <div class="mx-auto">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-square"></i> Sign in </span> </button>
                <button class="btn google-btn social-btn" type="button" class="btn btn-primary"><span><i class="fab fa-google"></i> Sign in </span> </button>
                 <button class="btn twitter-btn social-btn" type="button" class="btn btn-primary"><span><i class="fab fa-twitter"></i> Sign in </span> </button>
                 <p>Already have an account??</p>
                </div>
            </div>

                <p style="margin:20px;"><button type="button-center" class="btn btn-outline-primary">SNSのユーザーでログインする</button></p></div>
                <p style="margin:20px;"><button type="button-center" class="btn btn-outline-primary">新規にユーザー登録する</button></p></div>
        </div>

                
</body>
</html>