
 <p> You can now use the Access Token to query the customer endpoint (Postman works) </p>
 <ul>
  <li>Set the Acess Token in the header `Authorization`</li>
  <li>Add a field `Nuban` with a valid GT Bank Account number</li>
</ul>
 <?php
    $accessToken = $_REQUEST['AccessToken'];
    echo "<div>Access Token: ".$accessToken."</div><p></p><p></p>";
 file_put_contents('./log_'.date("j.n.Y").'.log', $_REQUEST, FILE_APPEND);
    print_r($_REQUEST);
  ?>
<p></p><p></p><p></p>
 <div>Copyright (c) 2018 Copyright Holder All Rights Reserved. Accounteer Test</div>
