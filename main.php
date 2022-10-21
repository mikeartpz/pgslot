<?php
/**
* Plugin Name: Huay Lao
* Plugin URI: https://pgslot898.com/
* Description: ตรวจผลหวยลาว อัพเดทอัตโนมัติ
* Version: 0.1
* Author: PGSLOT
* Author URI: https://pgslot898.com/
 */

function numberhuay()
{
return '    
            <div>
              <p class="number-alert">ผลหวยลาววันนี้ : <span id="myDatadate"></span></div>
            <div id="myData"></div>
            <script>
                fetch("https://xn--72c0baj5atl5aua7srb2g.com/test/lao.json")
        .then(response => response.json())
        .then(data => {
            console.log(data.ondate)
            document.querySelector("#myDatadate").innerText = data.ondate
            console.log(data.lao)
            document.querySelector("#myData").innerText = data.lao
        })
            </script>';
}
 
add_shortcode('number', 'numberhuay');
 
?>