<?php
    session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Beginner's Guide: The Tackle Box</title>

  <!--This file is for all files-->
  <link rel="stylesheet" type="text/css" href="../Universal/style.css" />

  <!--local css for this page only-->
  <link rel="stylesheet" type="text/css" href="guideStyle.css" />

  <!-- <script type="text/javascript" src="../Universal/function.js"> </script> -->
</head>

  <body>
    <!--Container separates body from footer-->
    <div class="main-container">
      <h1 class ="companyName">The Tackle Box</h1>
      <!-- <script>
        document.write(setUpMenu());
        document.write(setUpSideNav());
      </script> -->
      <?php
        include_once '../Universal/function.php';
    ?>
      
      
      <div class="content-container">
        <h2>Beginner's Guide to Fishing</h2>
        <p>
          This guide is designed for anybody interested in dipping their toes in 
          the water as an angler. Sometimes, advertising can make fishing seem 
          like an intimidating sport, filled with competition and failure. 
          Realistically, fishing is a relaxing hobby that anybody can enjoy with 
          little effort. It is a great way to bond with friends and family or 
          spend some time in reflective seclusion. Here are a few tips to get you 
          started:
        </p>
        <img id="fishing_bond"src="images/fish_bonding.png" alt="bonding over fishing" class="img-options-right">

        
        <h3>Three Important Rules</h3>
        
        <ol class="list">
            <li>You don’t need the best equipment.</li>
            <li>The key to fishing is patience.</li>
            <li>The newbie always catches all the fish.</li>
        </ol>

        <p>
          If a beginner follows the three above rules, their enjoyment of fishing 
          will far exceed that of one who throws thousands of dollars at the hobby. 
          If you want to know what basic gear you need for fishing, you can visit 
          our 
          <a href="gear.html">Fishing Gear page</a>.
        </p>
        
        <p>
          Second, one should know that fishing takes time and patience. Fishing is 
          not the type of hobby that allows one to allot a short amount of time. 
          Sure, if you don't have a lot of time at your disposal, you can cast your 
          line for a few minutes, but don't be disappointed if you leave with an 
          empty hook.
        </p>

        <p>
          Lastly, never let your beginner status allow you to feel like you won't 
          catch anything. More often than not, an experienced fisherman might walk 
          away with an empty net, whereas a beginner will catch the largest fish of 
          the day.
        </p>
      
      </div>
    </div>
    
    <!--Separate footer from body-->
<!-- <script>
  document.write(setUpFooter());
</script> -->
<?php
    include_once '../Universal/footer.php';
?>
  </body>
</html>
