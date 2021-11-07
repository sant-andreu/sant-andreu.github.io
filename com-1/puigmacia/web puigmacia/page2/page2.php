<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="de"
      lang="de">
<head>
  <meta http-equiv="content-type"
        content="text/html; charset=utf-8" />

  <title>Contacte</title>
  <link rel="stylesheet"
        href="../rw_common/themes/eye/styles.css"
        media="all"
        type="text/css" />
  <link rel="stylesheet"
        href="../rw_common/themes/eye/print.css"
        media="print"
        type="text/css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/eye/css/colors/body/grey_dark.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/eye/css/colors/border/white.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/eye/css/font/color/orange.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/eye/css/font/family/verdana.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/eye/css/header/image/image3.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/eye/css/border/off.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/eye/css/sidebar/left.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/eye/css/image_size/noresize.css" />
<script type="text/javascript"
      src="../rw_common/themes/eye/javascript.js">
</script>
  <meta http-equiv="content-type"
        content="text/html; charset=utf-8" />
  <meta name="robots"
        content="all" />
  <meta name="generator"
        content="RapidWeaver" />
  <meta name="generatorversion"
        content="3.6.5 (3.6.5)" />
</head>

<body>
  <div id="container">
    <div id="navcontainer">
      <ul>
        <li><a href="../index.html"
           rel="self">Inici</a></li>

        <li><a href="../page1/page1.html"
           rel="self">On som</a></li>

        <li><a href="page2.php"
           rel="self"
           class="current">Contacte</a></li>
      </ul>
    </div>

    <div id="pageHeader">
      <div id="image1">
        <img src="../rw_common/themes/eye/images/header/image1.jpg"
             alt="header image 1" />
      </div>

      <div id="image2">
        <img src="../rw_common/themes/eye/images/header/image2.jpg"
             alt="header image 2" />
      </div>

      <div id="image3">
        <img src="../rw_common/themes/eye/images/header/image3.jpg"
             alt="header image 3" />
      </div>

      <div id="image4">
        <img src="../rw_common/themes/eye/images/header/image4.jpg"
             alt="header image 4" />
      </div>

      <div id="image5">
        <img src="../rw_common/themes/eye/images/header/image5.jpg"
             alt="header image 5" />
      </div>

      <div id="logo"></div>
    </div>

    <div id="content">
      <div id="sidebarContainer">
        <!-- Start Sidebar wrapper -->

        <div class="sideHeader"></div><!-- Sidebar header -->

        <div id="sidebar">
          <br />
          <!-- sidebar content you enter in the page inspector -->
           <!-- sidebar content such as the blog archive links -->
        </div><!-- End sidebar content -->
      </div><!-- End sidebar wrapper -->

      <div id="mainContent">
        <?php
        if(!array_key_exists('formMessage', $_SESSION))
        $_SESSION['formMessage'] = "";
        if(!array_key_exists('form_element0', $_SESSION))
        $_SESSION['form_element0'] = "";
        if(!array_key_exists('form_element1', $_SESSION))
        $_SESSION['form_element1'] = "";
        if(!array_key_exists('form_element2', $_SESSION))
        $_SESSION['form_element2'] = "";
        if(!array_key_exists('form_element3', $_SESSION))
        $_SESSION['form_element3'] = "";
        ?>

        <div class="message-text">
          <?php
          if (!$_SESSION['formMessage']) { 
          echo 'Escriu per enviar-me un missatge.';
          } else {
           echo $_SESSION['formMessage'];
           }
           ?>
        </div>
        <br />

        <form action="./files/mailer.php"
              method="post"
              enctype="multipart/form-data">
          <label>Nom:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element0']; ?>"
                name="form_element0"
                size="40" />
          <br />
          <br />
          <label>Adreça electrònica:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element1']; ?>"
                name="form_element1"
                size="40" />
          <br />
          <br />
          <label>Assumpte:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element2']; ?>"
                name="form_element2"
                size="40" />
          <br />
          <br />
          <label>Missatge:</label> *
          <br />
          <textarea class="form-input-field"
                name="form_element3"
                rows="8"
                cols="38">
<?php echo $_SESSION['form_element3']; ?>
</textarea>
          <br />
          <br />
          <input class="form-input-button"
                type="reset"
                name="resetButton"
                value="Esborrar" /> <input class=
                "form-input-button"
                type="submit"
                name="submitButton"
                value="Enviar" />
        </form><?php session_destroy(); ?>
        <br style="clear: both" />
      </div>
    </div>
  </div>

  <div id="footer">
    <p>Webmaster Xagori + EPG / <a href="#"
       id="rw_email_contact"
       name="rw_email_contact">Contacta amb mi</a><script type=
       "text/javascript">
//<![CDATA[
var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":xa";var _rwObsfuscatedHref3 = "gor";var _rwObsfuscatedHref4 = "i@s";var _rwObsfuscatedHref5 = "ant";var _rwObsfuscatedHref6 = "-an";var _rwObsfuscatedHref7 = "dre";var _rwObsfuscatedHref8 = "u.c";var _rwObsfuscatedHref9 = "om";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;
//]]>
</script></p>
  </div>
</body>
</html>
