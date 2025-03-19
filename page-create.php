<?php 
/* 
Template Name: Create QR
Template Post Type: page
*/ 
?>
<style>

</style>
	<script src="<?= get_template_directory_uri() . '/js/qrcode.js'?>"></script>
	<script src="<?= get_template_directory_uri() . '/js/qrcode.min.js'?>"></script>

	<div class="">
		<input id="url-input" type="text" value="Add a URL" style="width: 200px" /><br/>
		<select name="rep" id="rep">
		<option value="jay">jay</option>
		<option value="nicole">nicole</option>
		<option value="austin">austin</option>
		</select>
		<button id="createQR">Create QR</button>
	</div>

	<!-- QR CODE CONTAINER -->
    <div id="qrcode" style="width: 420px; height: 420px; margin-top: 25px"></div>

    <script type="text/javascript">
	    var url = '';

      var qrcode = new QRCode(document.getElementById("qrcode"), {
        width: 420,
        height: 420,
      });

      function makeCode() {

        var elText = document.getElementById("url-input");

        var rep = document.getElementById("rep");

        if (!elText.value) {
          alert("Input a text");
          elText.focus();
          return;
        }

        // NEED UNQIU// 48-57 65-90 97-122
        // ID
        var rndmID = "";
        for (let i = 0; i < 9; i++) {
          var num;
          var letter;
          // NUM
          num = Math.floor(Math.random() * 9) + 48;
          letter = String.fromCharCode(num);
          rndmID += letter;
        }
      
        // // DATE
        // const dateNow = Date.now();
        // const createdDate = new Date(dateNow).toLocaleString();
        // console.log(createdDate);

        const repName = rep.value;

        url = elText.value.slice(0, elText.value.length - 1);
        url = elText.value;

        const myUrlWithParams = new URL("https://qrlab.cc/redirect");

        myUrlWithParams.searchParams.append("id", rndmID);
        myUrlWithParams.searchParams.append("rep", repName);
        qrcode.makeCode(myUrlWithParams.href);
      }

      document.getElementById('createQR').addEventListener('click', () => {
        console.log('on');
        makeCode();
      })
      
      window.addEventListener('keydown', (e) => {
        if (e.keyCode == 13) {
          makeCode();
        }
      })

      window.onerror = function(message, source, lineno, colno, error) { 
          console.error(message);
          alert("Check URL: Enter Full URL with https at the front. Try copy and pasting full url into form." + " " + message);
          return false
      };
    </script>
  </body>
</html>
