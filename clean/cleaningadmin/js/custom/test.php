<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

 <html xmlns="http://www.w3.org/1999/xhtml" lang="en">
 <head>
    <title>Fade to Black</title>
    <script type="text/javascript">
        //<![CDATA[
        function slidePanel(elementToSlide, slideSource)
        {
            var element = document.getElementById(elementToSlide);

            if(element.up == null || element.up == false) {
                setTimeout("fadeOut(\"" + elementToSlide + "\")", 100);
                element.up = true;
                slideSource.innerHTML = "Bring it down";
            } else {
                setTimeout("fadeIn(\"" + elementToSlide + "\")", 100);
                element.up = false;
                slideSource.innerHTML = "Take it up";
            }
        }


        function fadeIn(elementToFade)
        {
            var element = document.getElementById(elementToFade);

            element.style.opacity += 0.1;
            if(element.style.opacity > 1.0) {
                element.style.opacity = 1.0;
            } else {
                setTimeout("fadeIn(\"" + elementToFade + "\")", 100);
            }
        }


        function fadeOut(elementToFade)
        {
            var element = document.getElementById(elementToFade);

            element.style.opacity -= 0.1;
            if(element.style.opacity < 0.0) {
                element.style.opacity = 0.0;
            } else {
                setTimeout("fadeOut(\"" + elementToFade + "\")", 100);
            }
        }
        //]]>
    </script>
 </head>
 <body>
    <div>
        <div id="slideSource"
              style="width:150px; height:20px;
                    text-align:center; background:green"
             onclick="slidePanel('panel', this)">
            Take It up
        </div>
        <div id="panel"
              style="width:150px; height:130px;
                    text-align:center; background:red;
                    opacity:1.0;">
            Contents
        </div>
    </div>
</body>
</html>