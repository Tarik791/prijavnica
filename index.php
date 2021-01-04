<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  border:1px solid black;
    border-collapse: collapse;
    size: A4;
  margin: 0;

}
    
        body {

  background-color: #FAFAFA;
  font: 12pt "Tahoma";
}


  
  
  table{
    
    width: 200mm;
    font-size: 10px;
    height: 226mm;
}



  


  
</style>
    
</head>
<script>
/*
function getPDF(){
 
 if(document.getElementById('jibjmb').value == ""){
     alert('please enter your first name');
     document.getElementById('jibjmb').style.borderColor = "red";
     return false;
 }else if(document.getElementById('nazivobveznika').value == ""){
     alert('please enter your first naziv obveznika');
     document.getElementById('nazivobveznika').style.borderColor = "red";
     return false;
 
 }else if(document.getElementById('adresaobveznika').value == ""){
     alert('please enter your adresa obveznika');
     document.getElementById('adresaobveznika').style.borderColor = "red";
     return false;
 }else if(document.getElementById('gradfirme').value == ""){
     alert('please enter your grad firme');
     document.getElementById('gradfirme').style.borderColor = "red";
     return false;
 }else if(document.getElementById('postanskibrojfirme').value == ""){
     alert('please enter your postanskibrojfirme');
     document.getElementById('postanskibrojfirme').style.borderColor = "red";
     return false;
 }else if(document.getElementById('sifraopcine').value == ""){
     alert('please enter your sifraopcine');
     document.getElementById('sifraopcine').style.borderColor = "red";
     return false;
 }else if(document.getElementById('telefonfirme').value == ""){
     alert('please enter your telefonfirme');
     document.getElementById('telefonfirme').style.borderColor = "red";
     return false;
 }else if(document.getElementById('emailfirme').value == ""){
     alert('please enter your emailfirme');
     document.getElementById('emailfirme').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('licnibroj').value == ""){
     alert('please enter your licnibroj');
     document.getElementById('licnibroj').style.borderColor = "red";
     return false;
 }else if(document.getElementById('imeiprezimekorisnika').value == ""){
     alert('please enter your imeiprezimekorisnika');
     document.getElementById('imeiprezimekorisnika').style.borderColor = "red";
     return false;
 }else if(document.getElementById('licnaadresa').value == ""){
     alert('please enter your licnaadresa');
     document.getElementById('licnaadresa').style.borderColor = "red";
     return false;
 }else if(document.getElementById('opcinaprebivalista').value == ""){
     alert('please enter your opcinaprebivalista');
     document.getElementById('opcinaprebivalista').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('kontaktadresa').value == ""){
     alert('please enter your kontaktadresa');
     document.getElementById('kontaktadresa').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('licnipostanskibroj').value == ""){
     alert('please enter your licnipostanskibroj');
     document.getElementById('licnipostanskibroj').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('licnipostanskibroj').value == ""){
     alert('please enter your licnipostanskibroj');
     document.getElementById('licnipostanskibroj').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('mjesto').value == ""){
     alert('please enter your mjesto');
     document.getElementById('mjesto').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('licniemail').value == ""){
     alert('please enter your licniemail');
     document.getElementById('licniemail').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('licnaadresa').value == ""){
     alert('please enter your licnaadresa');
     document.getElementById('licnaadresa').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('sati').value == ""){
     alert('please enter your sati');
     document.getElementById('sati').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('minute').value == ""){
     alert('please enter your minute');
     document.getElementById('minute').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('osnovosiguranja').value == ""){
     alert('please enter your osnovosiguranja');
     document.getElementById('osnovosiguranja').style.borderColor = "red";
     return false;
 }else if(document.getElementById('zanimanje').value == ""){
     alert('please enter your zanimanje');
     document.getElementById('zanimanje').style.borderColor = "red";
     return false;
 }else if(document.getElementById('datumprijave').value == ""){
     alert('please enter your datumprijave');
     document.getElementById('datumprijave').style.borderColor = "red";
     return false;
 }else if(document.getElementById('osnovuplate').value == ""){
     alert('please enter your osnovuplate');
     document.getElementById('osnovuplate').style.borderColor = "red";
     return false;
 }else if(document.getElementById('sifraradnogmjesta').value == ""){
     alert('please enter your sifraradnogmjesta');
     document.getElementById('sifraradnogmjesta').style.borderColor = "red";
     return false;
 }else if(document.getElementById('stepenuvecanja').value == ""){
     alert('please enter your stepenuvecanja');
     document.getElementById('stepenuvecanja').style.borderColor = "red";
     return false;
 }else if(document.getElementById('potpispodnosioca').value == ""){
     alert('please enter your potpispodnosioca');
     document.getElementById('potpispodnosioca').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('datumpodnosioca').value == ""){
     alert('please enter your datumpodnosioca');
     document.getElementById('datumpodnosioca').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('imeiprezimesluzbenikaporezneuprave').value == ""){
     alert('please enter your imeiprezimesluzbenikaporezneuprave');
     document.getElementById('imeiprezimesluzbenikaporezneuprave').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('imeiprezimelicakojejepopuniloprijavu').value == ""){
     alert('please enter your imeiprezimelicakojejepopuniloprijavu');
     document.getElementById('imeiprezimelicakojejepopuniloprijavu').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('potpislicakojejepopuniloprijavu').value == ""){
     alert('please enter your stepenuvecanja');
     document.getElementById('stepenuvecanja').style.borderColor = "red";
     return false;
 }
 else if(document.getElementById('datumprijemaprijave').value == ""){
     alert('please enter your stepenuvecanja');
     document.getElementById('stepenuvecanja').style.borderColor = "red";
     return false;
 }
     
 };
 */
 </script>
 <div id="error"></div>
<body class="page" size="A4" layout="portrait">
    <center>
    <form action="generate.php" method="post" onsubmit="getPDF();">
        <button type="submit" name="submit" >Send</button>
<div style="width: 100mm; height: 297mm;
   border: solid 2px #333; padding: 10px;">

    <table style="width: 190mm; height: 5mm; border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px; ">
    <tr>
            <th scope="col">Federacija Bosne i Hercegovine
                <br> Federalno ministarstvo <br>
           finansija/financija Porezna uprava</th>
            <th scope="col">Obrazac JS3100<br>Prijava/Promjena/Odjava osiguranja</th>
            <th scope="col">Bar kod</th>
          </tr>
    </table>

        

        <table style="width: 190mm; height:10mm;  border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px;">
        <tr>
            <td colspan="7"><h2 align="center;" style="font-size:12px; border:none; ">Prvi dio - podaci o obvezniku doprinosa</h2></td></tr>
              </tr>
              <tr>
            <td colspan="3">1) JIB/JMB
                <input id="jibjmb" placeholder="JIB/JMB" style="outline:none; border:none; font-size:13px; width:150mm; color:blue; text-align:center; color:blue;" type="text" name="brojfirme" required></td>
            </tr>
            <tr>
                    <td colspan="3">2)Naziv obveznika uplate doprinosa:
                    <input id="nazivobveznika" colspan="3" placeholder="Naziv obveznika uplate doprinosa:" style="outline:none; border:none; font-size:16px; width:250px; color:blue; text-align:center; color:blue;" type="text" name="nazivfirme" required></td>
           </tr>
           
           <tr>
                    <td colspan="3">3)Adresa obveznika uplate doprinosa:
                   <input id="adresaobveznika" placeholder="Adresa obveznika uplate doprinosa:" style="outline:none; border:none; font-size:16px; width:250px; color:blue; text-align:center; color:blue;" style="color:blue;" type="text" name="adresafirme" required></td>
              
            </tr>
            <tr>
                       
                        <td colspan="3">4) Grad i poštanski broj:
                        <input id="gradfirme" placeholder="Grad" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="text" name="gradfirme" >
                         <input id="postanskibrojfirme" placeholder="Poštanski broj" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="number" name="postanskibrojfirme" required></td>
                    </tr>
           <tr>
              <td colspan="3">5)Šifra opcine:
          
          <input id="sifraopcine" placeholder="Šifra općine" style="color:blue; outline:none; width:250px; border:none; font-size:16px; text-align:center;" type="password" name="sifraopcine" required></td>
          
              </tr>
              <tr>
                        
                        <td colspan="3">6) Vrsta prijave
                        Prijava osiguranja:
                        <input type="radio" name="gender" value="PO" >
                        Odjava osiguranja:
                            <input type="radio" name="gender" value="OO" >
                        Promjena podataka o osiguranju: 
                            <input type="radio" name="gender" value="POOS" ></td>
                    </tr>
                    <tr>
                       
                       <td colspan="3">7)Telefon:
                       <input id="telefonfirme" placeholder="Broj telefona" style="color:blue; outline:none; width:250px; border:none; font-size:16px; text-align:center;" type="tel" name="telefonfirme" required></td>
                   </tr>
                   <tr>
                     
                        <td  colspan="3">8)Email:
                        <input id="emailfirme" placeholder="Unesite svoj E-mail" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="email" name="emailfirme" required></td>
                    </tr>

                    </table>
                    <table style="width:  700px; height: 80px; border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px;">
                <tr>
                    <td colspan="7"><h2 align="center;" style="font-size:13px;">Drugi dio - podaci osiguranika</h2></td>
                    </tr>
               
              
                    
                <tr>
                        <td>1</td>
                        <td colspan="2">JMB ili lični identifikacioni broj(za strance)</td>
                        <td colspan="7"><input id="licnibroj" placeholder="JMB ili lični identifikacioni broj" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="number" name="licnibroj" required></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td colspan="2">Prezime i ime osiguranika:</td>
                        <td colspan="7"><input id="imeiprezimekorisnika" placeholder="Prezime i ime osiguranika" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="username" name="imeiprezimekorisnika" required></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td colspan="2">Djevojacko prezime:</td>
                        <td colspan="7"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td colspan="2">Datum rođenja</td>
                        <td colspan="7"><input id="datumrodjenjakorisnika" placeholder="Datum rođenja" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="date" name="datumrodjenjakorisnika" required></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td colspan="2">Spol:</td>
                        <td colspan="3"> Ženski: <input type="radio" name="gender1" value="Muško" id="" > </td>
                        <td coslpan="3">Muški: <input type="radio" name="gender1" value="Žensko" id="" > </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td colspan="2">Adresa prebivališta:</td>
                        <td colspan="7"><input id="licnaadresa" placeholder="Adresa prebivališta" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="text" name="licnaadresa"  required></td>
                    </tr>
                <tr>
                    <td>7</td>
                    <td colspan="2">Općina prebivališta:</td>
                    <td colspan="7"><input placeholder="Šifra općine" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" type="password" name="opcinaprebivalista" id="opcinaprebivalista"  required></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td colspan="2">Kontakt adresa-ulica i broj
                    <br>(ako se razlikuje od prebivališta)</td>
                    <td colspan="7"><input id="kontaktadresa" type="text" placeholder="Kontakt adresa-ulica i broj"style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" name="kontaktadresa" required></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td colspan="2">Kontakt adresa - postanski broj i mjesto</td>
                    <td colspan="3"> <input id="licnipostanskibroj" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" placeholder="Poštanski broj" type="number" name="licnipostanskibroj" required></td>
                    <td placeholder="Mjesto" colspan="3"><input id="mjesto" placeholder="mjesto" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" type="text" name="mjesto" required></td>
                </tr>
                <tr>
                            <td>10</td>
                            <td colspan="2">E-mail adresa</td>
                            <td colspan="7"><input id="licniemail" placeholder="Unesite E-mail adresu" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" style="color:blue;" type="email" name="licniemail" required></td>
                </tr>
                <tr>
          <td>11</td>
          <td colspan="2">Stručna sprema:</td>
          <td colspan="5">
              DR <input type="radio" name="gender2" value="DR"> MR <input type="radio" name="gender2" value="MR"> VSS <input type="radio" name="gender2" value="VSS"> VŠS <input type="radio" name="gender2" value="VŠS"> SSS <input type="radio" name="gender2" value="SSS"> NIŽA <input type="radio" name="gender2" value="NIŽA"> VKV <input type="radio" name="gender2" value="VKV"> KV <input type="radio" name="gender2" value="KV"> PK <input type="radio" name="gender2" value="PK"> NK <input type="radio" name="gender2" value="NK"></td>
        </tr>
   </table >
   
        <table style="width:700px; height: 80px; border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px;">
        <tr>
        <th colspan="7"><h2 align="center;">Treći dio-podaci o osiguranju</th>
        </tr>

          <tr>
              <td>1</td>
              <td colspan="2">Dnevno radno vrijeme:</td>
              <td colspan="5"> <input required id="sati" placeholder="Sati" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;"style="color:blue;" type="text" name="sati" > <input id="minute" placeholder="Minute" placeholder="Unesite E-mail adresu" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" style="color:blue;" style="color:blue;" type="text" 
                          name="minute" required></td>
          </tr>
          <tr>
              <td>2</td>
              <td colspan="2">Osnov osiguranja:</td>
              <td colspan="7"><input id="osnovosiguranja" placeholder="Osnov osiguranja" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" style="color:blue;" type="text" name="osnovosiguranja" required></td>
          </tr>
          <tr>
              <td>3</td>
              <td colspan="2">Zanimanje:</td>
              <td colspan="7"><input  required id="zanimanje" placeholder="Zanimanje" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" style="color:blue;" type="text" name="zanimanje" ></td>
          </tr>
          <tr>
              <td>4</td>
              <td colspan="2">Stručna sprema koja se traži na radnom mjestu
              </td>
              <td colspan="7">  DR <input type="radio" name="gender3" value="DR"> MR <input type="radio" name="gender3" value="MR"> VSS <input type="radio" name="gender3" value="VSS"> VŠS <input type="radio" name="gender3" value="VŠS"> SSS <input type="radio" name="gender3" value="SSS"> NIŽA <input type="radio" name="gender3" value="NIŽA"> VKV <input type="radio" name="gender3" value="VKV"> KV <input type="radio" name="gender3" value="KV"> PK <input type="radio" name="gender3" value="PK"> NK <input type="radio" name="gender3" value="NK"></td>
          </tr>
          <tr>
              <td>5</td>
              <td colspan="2">Datum prijave/odajve/promjene osiguranja</td>
              <td colspan="7"><input id="datumprijave" style="color:blue; outline:none; border:none; font-size:13px; width:150px; text-align:center;" style="color:blue;" type="date" name="datumprijave" required></td>
          </tr>
          <tr>
              <td>6</td>
              <td colspan="2">Osnov za uplatu doprinosa</td>
              <td colspan="7"><input id="osnovuplate" placeholder="Osnov za uplatu doprinosa" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;"  type="text" name="osnovuplate" required></td>
  
          </tr>
          <tr>
              <td>7</td>
              <td colspan="2">Staž za uvećanim trajanjem</td>
              <td colspan="3">
                  <input id="sifraradnogmjesta" placeholder="Šifra radnog mjesta" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;"  type="password" name="sifraradnogmjesta" required>
              </td>
              <td colspan="3">
              <input id="stepenuvecanja" type="text" placeholder="Stepen uvećanja" style="color:blue; outline:none; border:none; font-size:16px; width:250px; text-align:center;" name="stepenuvecanja" required></td>
          </tr>
          </table>
        
          <table style="width:  700px; height: 10mm; border: solid 2px #333; text-align: center; padding: 5px; margin:45px 20px 20px 20px;">
          <tr>
          <td colspan="3">Potpis podnosioca prijave: 
          <input id="potpispodnosioca" placeholder="Unesi podatke" type="text" style="color:blue; outline:none; border:none; font-size:16px; width:130px; text-align:center;" name="potpispodnosioca" required></td>
        </tr>
        <tr>
          <td colspan="3">Datum: <input id="datumpodnosioca" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" type="date" name="datumpodnosioca" required></td>
        </tr>
        <tr>
          <td>Ime i prezime službenika Porezne uprave:
              <input id="imeiprezimesluzbenikaporezneuprave" placeholder="Unesi podatke" type="text" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;"name="imeiprezimesluzbenikaporezneuprave" required>
          </td>
        </tr>
        <tr>
          <td colspan="3">Ime i prezime lica koje je popunilo prijavu: <input id="imeiprezimelicakojejepopuniloprijavu" placeholder="Unesi podatke" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" type="text" name="imeiprezimelicakojejepopuniloprijavu" required></td>
        </tr>
        <tr>
          <td>Potpis službenika Porezne prijave:
              <input id="potpissluzbenikaporezneprijave" type="text" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" placeholder="Unesi podatke" name="potpissluzbenikaporezneprijave" >
          </td>
        </tr>
        <tr>
              <td colspan="3"><b>Odgovornost lica koje je popunilo prijavu:</b><p>Izjavljujem da saam pregledao/la ou prijavu i da su uneseni podaci, po mom najboljem znanju i vjerovanju, vjerodostojni, tacni i potpuni </p></td>
            </tr>
            <tr>
              <td colspan="3">MP</td>
            </tr>
            <tr>
              <td colspan="3">
                  Datum prijema prijave:
                  <input id="datumprijemaprijave" type="date" style="color:blue; outline:none; border:none; font-size:16px; width:150px; text-align:center;" name="datumprijemaprijave" required>
              </td>
            </tr>

        </table>
        </form>
  
    </div>
    </center>
</body>
</html>