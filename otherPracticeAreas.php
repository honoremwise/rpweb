<style>
body{
    line-height: 30px;
}
</style>
<div class="navigation">
    
    <h3>Other Practice Areas</h3>

    <table>
        <?php
        if (strpos($_SERVER['REQUEST_URI'], 'corporate-commercial') != false)
        {
             echo '
            
<tr>
            
        <td style="margin-bottom: 10px;">
    <div style="display: flex; align-items: center;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25px" height="25px" style="margin-right: 3px; max-height: 25px; ">
        <a href="banking-finance.php" style="font-size:16px">Banking &amp; Finance</a>
    </div>
    
    
    <div style="display: flex; align-items: center ;margin-bottom:-15px">
  <img src="./img/ABC.png" width="25" height="25"; >
  
  <a href="mining-energy-infrastructure.php" style="font-size: 16px">Mining, Energy &amp; Infrastructure</a>
  </div>
  
  <div style="display: flex; align-items: center; margin-bottom:-15px">
  <img src="./img/ABC.png" width="25px" height="auto" style="max-height: 25px;">
  <a href="employment-labour.php" style="font-size: 16px;">Employment &amp; Labour Law</a>
    </div></td>
    
<td style="text-align: left;">
    
                <div style="display: flex;align-items: center; margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="auto" style="max-height: 25px;">
        <a href="realestate-law.php" style="font-size: 16px;">Intellectual Property</a>
        </div>
        
        <div style="display: flex;align-items: center; margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="auto" style="max-height: 25px;">
        <a href="realestate-law.php" style="font-size: 16px;">Real Estate & Property Law</a>
        </div>
        
        <div style="display: flex;align-items: center; margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="auto" style="max-height: 25px;">
        <a href="litigation-arbitration-law.php" style="font-size: 16px;">Litigation &amp; Arbitration</a>
        </div>

</td></tr>';
        }

        if (strpos($_SERVER['REQUEST_URI'], 'banking-finance') != false)
        {
             echo '
<tr>
            
 <td style="text-align:left; ">
        <div style="display: flex;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px;">
        <a href="corporate-commercial.php" style="font-size: 16px;">Corporate &amp; Commercial Law</a>
        </div>
        
        <div style="display:flex;align-items: center ;margin-bottom:-15px">
  <img src="./img/ABC.png" width="25" height="25"  style="max-height: 25px;">
  <a href="mining-energy-infrastructure.php" style="font-size: 16px;">Mining, Energy &amp; Infrastructure</a>
  </div>
  
  <div style="display: flex;align-items: center ;margin-bottom:-15px">
  <img src="./img/ABC.png" width="25" height="25"  style="max-height: 25px;">
  <a href="employment-labour.php" style="font-size: 16px;">Employment &amp; Labour Law</a>
  </div>
    
</td><td style="text-align: left;">
    
    <div style="display:flex;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25"  style="max-height: 25px;">
        <a href="intellectual-property.php" style="font-size: 16px;">Intellectual Property</a>
        </div>
        
        <div style="display:flex;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25"  style="max-height: 25px;">
        <a href="realestate-law.php" style="font-size: 16px;">Real Estate & Property Law</a>
        </div>
        
        <div style="display: flex;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25"  style="max-height: 25px;">
        <a href="litigation-arbitration-law.php" style="font-size: 16px;">Litigation &amp; Arbitration</a>
        </div>


</td></tr>';
        }
        if (strpos($_SERVER['REQUEST_URI'], 'mining-energy-infrastructure') != false)
        {
             echo '
<tr>
            
<td style="text-align: left;">
        
        <div style="display: flex;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px;">
        <a href="corporate-commercial.php" style="font-size: 16px">Corporate &amp; Commercial Law</a>
        </div>
        
        <div style="display: flex;align-items: center;;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px;">
        <a href="banking-finance.php" style="font-size: 16px;">Banking &amp; Finance</a>
        </div>
        
    <div style="display: flex;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px;">
         <a href="employment-labour.php" style="font-size: 16px;">Employment &amp; Labour Law</a>
         </div>
</td><td style="text-align: left;">
    
    <div style="display: flex;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px;">
        <a href="intellectual-property.php" style="font-size: 16px;">Intellectual Property</a>
        </div>
        
    <div style="display: flex;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px;">
        <a href="realestate-law.php" style="font-size: 16px;">Real Estate & Property Law</a>
    </div>
    
    <div style="display: flex;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px";>
        <a href="litigation-arbitration-law.php" style="font-size: 16px;">Litigation &amp; Arbitration</a>
    </div>

</td></tr>';
        }

        if (strpos($_SERVER['REQUEST_URI'], 'employment-labour') != false)
        {
             echo '
        <tr>
            
 <td style="text-align: left;">
        <div style="display: flex ;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="corporate-commercial.php" style="font-size: 16px;">Corporate &amp; Commercial Law</a>
        </div>
        
    <div style="display: flex ;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="banking-finance.php" style="font-size: 16px;">Banking &amp; Finance</a>
        </div>
        
    <div style="display: flex ;align-items: center ;margin-bottom:-15px">    
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="mining-energy-infrastructure.php" style="font-size: 16px;">Mining, Energy &amp; Infrastructure</a>
    </div>
    </td>
    
    <td style="text-align: left;">
    
    <div style="display: flex ;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="intellectual-property.php" style="font-size: 16px;">Intellectual Property</a>
        </div>
        
    <div style="display: flex ;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="realestate-law.php" style="font-size: 16px;">Real Estate & Property Law</a>
    </div>
    
    <div style="display: flex ;align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="litigation-arbitration-law.php" style="font-size: 16px;">Litigation &amp; Arbitration</a>
    </div>

</td></tr>';
        }

        if (strpos($_SERVER['REQUEST_URI'], 'intellectual-property') != false)
        {
             echo '
        <tr>
            
<td style="text-align: left;">
        
    <div style="display: flex; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="corporate-commercial.php" style="font-size: 16px;">Corporate &amp; Commercial Law</a>
        </div>
    
    <div style="display: flex; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="banking-finance.php" style="font-size: 16px;">Banking &amp; Finance</a>
        </div>
        
    <div style="display: flex; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="mining-energy-infrastructure.php" style="font-size: 16px;">Mining, Energy &amp; Infrastructure</a>
    </div>
 
    </td><td style="text-align: left;">
    
    <div style="display: flex; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
     <a href="employment-labour.php" style="font-size: 16px;">Employment &amp; Labour Law</a>
     </div>
     
     <div style="display: flex; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="realestate-law.phpstyle" style="font-size: 16px;">Real Estate & Property Law</a>
        </div>
        
    <div style="display: flex; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
        <a href="litigation-arbitration-law.php"style="font-size: 16px;">Litigation &amp; Arbitration</a>
    </div>

    </td></tr>';
        }

        if (strpos($_SERVER['REQUEST_URI'], 'realestate-law') != false)
        {
             echo '
        <tr>
            
<td style="text-align: left;">
        
    <div style="display: flex ; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25"style="max-height: 25px">
        <a href="corporate-commercial.php" style="font-size: 16px;">Corporate &amp; Commercial Law</a>
        </div>
    
    <div style="display: flex ; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25"style="max-height: 25px">
        <a href="banking-finance.php">Banking &amp; Finance</a>
        </div>

    <div style="display: flex ; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25"style="max-height: 25px">
        <a href="mining-energy-infrastructure.php" style="font-size: 16px;">Mining, Energy &amp; Infrastructure</a>
    </div>

    </td><td style="text-align: left;">
    
    <div style="display: flex ; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25"style="max-height: 25px">
        <a href="employment-labour.php" style="font-size: 16px;">Employment &amp; Labour Law</a>
    </div>
    
    <div style="display: flex ; align-items: center ;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25"style="max-height: 25px">
        <a href="intellectual-property.php" style="font-size: 16px;">Intellectual Property</a>
    </div>
    
    <div style="display: flex; align-items: center;margin-bottom:-15px">
        <img src="./img/ABC.png" width="25" height="25"style="max-height: 25px">
        <a href="litigation-arbitration-law.php" style="font-size: 16px;">Litigation &amp; Arbitration</a>
    </div>
</td></tr>';
        }

if (strpos($_SERVER['REQUEST_URI'], 'litigation-arbitration') != false) {
    echo '
    <tr>
        <td style="text-align: left;">

            <div style="display: flex; align-items: center; margin-bottom: -15px;">
                <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
                <a href="corporate-commercial.php">Corporate &amp; Commercial Law</a>
            </div>

            <div style="display: flex; align-items: center; margin-bottom: -15px;">
                <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
                <a href="banking-finance.php" style="font-size: 16px;">Banking &amp; Finance</a>
            </div>

            <div style="display: flex; align-items: center; margin-bottom: -15px;">
                <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
                <a href="mining-energy-infrastructure.php" style="font-size: 16px;">Mining, Energy &amp; Infrastructure</a>
            </div>

        </td>
        <td style="text-align: left;">

            <div style="display: flex; align-items: center; margin-bottom: -15px;">
                <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
                <a href="employment-labour.php" style="font-size: 16px;">Employment &amp; Labour Law</a>
            </div>

            <div style="display: flex; align-items: center; margin-bottom: -15px;">
                <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
                <a href="intellectual-property.php" style="font-size: 16px;">Intellectual Property</a>
            </div>

            <div style="display: flex; align-items: center; margin-bottom: -15px;">
                <img src="./img/ABC.png" width="25" height="25" style="max-height: 25px">
                <a href="realestate-law.php" style="font-size: 16px;">Real Estate & Property Law</a>
            </div>

        </td>
    </tr>';
}
?>
</table>
<ul></ul>
</div>
