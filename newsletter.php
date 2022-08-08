<?php 
  include $_SERVER['DOCUMENT_ROOT']."/api/index.php";
  $session = (new Api())->get_session($_COOKIE['token']);
  
  $ignore = array(
    'header' => true,
    'footer' => true
  );

  $title = "Newsletter sign-up - Todorescu.com";
  include php_root().'php/lp-header.php';
?>

<?php include php_root()."php/templates/forms/newsletter-signup.php"; ?>
<style>
    #newsletter form {
        margin: 25px 0 0 0;
    }
    #newsletter .container {
        background: #efefef;
        border-radius: 5px;
        margin: 0 auto;
        padding: 50px 25px;
        text-align: center;
    }
    #newsletter h4 {
        font-weight: bold;
    }
    #newsletter input[type="email"] {
        outline: 0;
        padding: 5px;
        margin-right: -7px;
        border-radius: 5px 0 0 5px;
    }
    #newsletter input[type="submit"] {
        background-color: var(--secondary-color);
        color: white;
        line-height: 0;
        padding: 18px 40px;
        border-radius: 0 5px 5px 0;
        user-select: none;
        width: 115px;
        padding: 17px 5px;
    }
</style>

<?php include php_root().'php/lp-footer.php'; ?>
</body>
</html>