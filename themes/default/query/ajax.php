<html>
<head>

<link href="skins/style.css" rel="stylesheet" type="text/css" />
<!--
  jQuery library
-->
<script type="text/javascript" src="lib/jquery-1.4.2.min.js"></script>
<!--
  jCarousel library
-->
<script type="text/javascript" src="lib/jquery.jcarousel.min.js"></script>
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="skins/ie7/skin.css" />
<script type="text/javascript">

function mycarousel_itemLoadCallback(carousel, state)
{
    // Since we get all URLs in one file, we simply add all items
    // at once and set the size accordingly.
    if (state != 'init')
        return;

    jQuery.get('gambar.txt', function(data) {
        mycarousel_itemAddCallback(carousel, carousel.first, carousel.last, data);
    });
};

function mycarousel_itemAddCallback(carousel, first, last, data)
{
    // Simply add all items at once and set the size accordingly.
    var items = data.split('|');

    for (i = 0; i < items.length; i++) {
        carousel.add(i+1, mycarousel_getItemHTML(items[i]));
    }

    carousel.size(items.length);
};

/**
 * Item html creation helper.
 */
function mycarousel_getItemHTML(url)
{
    return '<img src="' + url + '" width="100" height="100" alt="" /> </a>';
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        itemLoadCallback: mycarousel_itemLoadCallback
    });
});

</script>
</head>
<body>

<?php
   $myFile = "gambar.txt";
       $fh = fopen($myFile, 'w');
       
  foreach (glob("../../../media/uploads/*_m.jpg") as $jepeg){
  	  $daftar = "http://www.pru13.info/ushahidi/media/uploads/".$jepeg."|";
  	  echo "http://www.pru13.info/ushahidi/media/uploads/".$jepeg."|";;
  	  fwrite($fh,$daftar);
      
  }
   fclose($fh);
?>

<div id="wrap">
  
  <h5>&nbsp;&nbsp;&nbsp;JOMpantau Gallery</h5>  

  <div id="mycarousel" class="jcarousel-skin-ie7">
    <ul>
      <!-- The content will be dynamically loaded in here -->
    </ul>
  </div>
<P>List of files:</p>
<P><?=$thelist?></p>
</div>
</body>
</html>
