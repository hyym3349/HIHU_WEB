<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HIHU_회원가입</title>
        <!-- Bootstrap -->
        <link href="../plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- font awesome -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Custom style -->
        <link rel="stylesheet" href="../plugin/bootstrap/css/style.css" media="screen" title="no title" charset="utf-8">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../plugin/bootstrap/js/bootstrap.min.js"></script>
        <script src="../config/js/login.js"></script>
    </head>
<body>
  <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="login-box well">
                        <legend>회원가입</legend>
                <form action='join_action.php' method="POST">
                  <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="std_id" placeholder="학번을 입력하세요" class="form-control" />
                            </div>
                  <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="std_name" placeholder="이름을 입력하세요" class="form-control" />
                            </div>
                  <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                <input type="text" name="std_dep" placeholder="학과를 입력하세요" class="form-control" />
                            </div>
                  <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="std_pwd" placeholder="비밀번호를 입력하세요" class="form-control" />
                            </div>
                  <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                <textarea type="password" name="std_email" placeholder="이메일(example@example.com)" class="form-control" ></textarea>
                            </div>
                 <p><input type="submit" class="btn btn-default btn-block" value="회원가입"/></p>
                </form>
                <button type="submit" class="btn btn-default btn-block" onclick="location.href='login.php'"/>로그인 메뉴</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
