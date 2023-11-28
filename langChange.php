
<?php

session_start(); 


if (isset($_POST['locale'])) {
  $_SESSION['locale'] = ($_POST['locale'] == 'ar') ? 'ar' : 'en';
  $_SESSION['layout'] = ($_POST['locale'] == 'ar') ? 1 : 0;

}
elseif($_SESSION['locale']=='ar'){
  $_SESSION['locale'] = 'ar';
  $_SESSION['layout'] =1;
}
else {
  $_SESSION['locale'] = 'en';
  $_SESSION['layout'] = 0;
}
?>