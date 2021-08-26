<?
	include ("php/display.php");
	include ("config.php");
?>

<a href="https://oauth.vk.com/authorize?client_id=<?=ID?>&display=page&redirect_uri=<?=URL?>&response_type=code" target="_blank">Войти через ВК</a>
<!DOCTYPE html>
<html lang="ru">
<?=html_head()?>
  <body>
<?=head()?>
<?=head_navbar()?>
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
          </ol>
          <h6 class="slim-pagetitle">Поиск майнкрафт-аккаунта</h6>
        </div><!-- slim-pageheader -->
        <div class="section-wrapper mg-t-20">
          <div class="d-flex align-items-center justify-content-center">
           <form method="post">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <input class="form-control" type="text" name="search" placeholder="Ник">
                </div>
              </div><!-- col-4 -->
              <div class="form-group mg-b-10-force">
                <div class="col-lg-4">
                  <button name="check" class="btn btn-primary">Поиск</button>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
          </form>
        </div><!-- section-wrapper -->
<?php if(isset($_POST["check"])){
    $text = mysql_real_escape_string($_POST["search"]);
    check($text);
}?>
</div><!-- d-flex -->
      </div><!-- container -->
    </div><!-- slim-mainpanel -->
<?=footer()?>

  </body>
</html>