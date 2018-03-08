<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            #dialogbox{
                display:none;
                position: fixed;
                background: #231F20;
                border-radius: 7px;
                width:550px;
                z-index: 10000;
            }
        #dialogbox > div { background:#27aae1; margin:5px;  }
        #dialogbox > div > #dialogboxhead { background: #231F20;  font-size: 29px; padding:10px; color:#EFEFEF;  }
         #dialogbox > div > #dialogboxbody { background: #1c75bc;  font-size:20px; padding:20px; color: #EFEFEF;  }
        #dialogbox > div > #dialogboxfoot {  background: #1c75bc; padding:20px; font-size: 15px; text-align: right; }
        
        </style>
        <script>
       function CustomAlert()
        {
            this.render = function(dialog)
            {
                var winW = window.innerWidth;
                var winH = window.innerHeight;
         
                var dialogbox = document.getElementById('dialogbox');
                dialogbox.style.left = (winW/2) - (550 * .5)+"px";
                dialogbox.style.top = "250px";
                dialogbox.style.display = "block";
                document.getElementById('dialogboxhead').innerHTML="Submitted";
                document.getElementById('dialogboxbody').innerHTML=dialog;
                document.getElementById('dialogboxfoot').innerHTML='<button onclick="Alert.ok()">OK</button>';
            }
            this.ok = function()
            {
                document.getElementById('dialogbox').style.display="none";
                
            }
            
        }
        var Alert = new CustomAlert();
        </script>
    </head>
    
    <body>
        <div id="dialogoverlay"></div>
        <div id="dialogbox">
           <div>
               <div id="dialogboxhead"></div>
               <div id="dialogboxbody"></div>
               <div id="dialogboxfoot"></div>
            </div>
        </div>
        
        <script>Alert.render('Your message has been successfully submitted...')</script>
    </body>
</html>
