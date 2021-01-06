<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="pdf.php" rel="stylesheet">
    <style>

* {
	margin: 0;
    font-size:12px;

}

td,th{
    border:solid 1px black;
    border-collapse:collapse;
}


body {
	width: 210mm;
    height:297mm;

}

input{
    background:none;
    width:140px;
    border:none;
    height:12px;

}

</style>
</head>
<body>
<div  style="text-align:center;   
">
    <table cellspacing="0" style="border:solid 2px black;  width:795px;">
        
          <tr>
            <th scope="col">Federacija Bosne i Hercegovine
                <br> Federalno ministarstvo <br>
           finansija/financija Porezna uprava</th>
            <th scope="col">Obrazac JS3100<br>Prijava/Promjena/Odjava osiguranja</th>
            <th scope="col">Bar kod</th>
          </tr>
    </table>
    <h2 align="center;" style="font-size:13px; border:none; height:20px;">Prvi dio - podaci o obvezniku doprinosa</h2>
    <table  style="border:solid 2px black; width: 209mm; text-align: center; height:20px; position:relative; top:10px;" >


        <tr style="border-collapse:collapse; height:100%; width:5%;">
            <td colspan="3">1) JIB/JMB
            <input id="jibjmb" placeholder="JIB/JMB"  style="color:blue;  font-size:13px; width:150mm;  text-align:center; " type="text" name="brojfirme"><?php echo $result['brojfirme'] ?></td> 
        </tr>

        <tr>
                    <td colspan="3">2)Naziv obveznika uplate doprinosa:
                    <input id="nazivobveznika" colspan="3" placeholder="Naziv obveznika uplate doprinosa:" style="color:blue; " type="text" name="nazivfirme" > <?php echo $result['nazivfirme'] ?></td>
           </tr>
           <tr>
              <td colspan="3">5)Šifra opcine:
          
          <input id="sifraopcine" placeholder="Šifra općine" style="color:blue;" type="password" name="sifraopcine" ><?php echo $result['sifraopcine'] ?></td>
          
              </tr>
              <tr>
                        
                        <td colspan="3">6) Vrsta prijave
                        Prijava osiguranja:
                        <input type="radio" name="gender" value="PO" >
                        Odjava osiguranja:
                            <input type="radio" name="gender" value="OO" >
                        Promjena podataka o osiguranju: 
                            <input type="radio" name="gender" value="POOS" ><?php echo $result['gender'] ?></td>
                </tr>
                <tr>
                       
                       <td colspan="3">7)Telefon:
                       <input id="telefonfirme" placeholder="Broj telefona" style="color:blue;" type="tel" name="telefonfirme"><?php echo $result['telefonfirme'] ?></td>
                </tr>
                <tr>
                     
                     <td  colspan="3">8)Email:
                     <input id="emailfirme" placeholder="Unesite svoj E-mail" style="color:blue;" type="email" name="emailfirme" ><?php echo $result['emailfirme'] ?></td>
                 </tr>
                 </table>
                 <br>
                 <br>
                 <br>
                 <h2 align="center;" style="font-size:13px;">Drugi dio - podaci osiguranika</h2>
                 <table  style=" border:solid 2px black; width: 209mm; text-align: center; height:20px; position:relative; top:10px;" >
                             
                    <tr>
                        <td>1</td>
                        <td colspan="2">JMB ili lični identifikacioni broj(za strance)</td>
                        <td colspan="7"><input id="licnibroj" placeholder="JMB ili lični identifikacioni broj" style="color:blue;" type="number" name="licnibroj"><?php echo $result['licnibroj'] ?></td>
                    </tr>
                            <tr>
                    <td>2</td>
                    <td colspan="2">Prezime i ime osiguranika:</td>
                    <td colspan="7"><input id="imeiprezimekorisnika" placeholder="Prezime i ime osiguranika" style="color:blue;" type="username" name="imeiprezimekorisnika"><?php echo $result['imeiprezimekorisnika'] ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td colspan="2">Datum rođenja</td>
                        <td colspan="7"><input id="datumrodjenjakorisnika" placeholder="Datum rođenja" style="color:blue;" type="date" name="datumrodjenjakorisnika"><?php echo $result['datumrodjenjakorisnika'] ?></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td colspan="2">Spol:</td>
                        <td colspan="3"> Ženski: <input type="radio" name="gender1" value="Muško" id="" > </td>
                        <td coslpan="3">Muški: <input type="radio" name="gender1" value="Žensko" id="" style=> <?php echo $result['gender1'] ?></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td colspan="2">Adresa prebivališta:</td>
                        <td colspan="7"><input id="licnaadresa" placeholder="Adresa prebivališta" style="color:blue;" type="text" name="licnaadresa" ><?php echo $result['licnaadresa'] ?></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td colspan="2">Općina prebivališta:</td>
                        <td colspan="7"><input placeholder="Šifra općine" style="color:blue;" type="password" name="opcinaprebivalista" id="opcinaprebivalista"  ><?php echo $result['opcinaprebivalista'] ?></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td colspan="2">Kontakt adresa-ulica i broj
                        <br>(ako se razlikuje od prebivališta)</td>
                        <td colspan="7"><input id="kontaktadresa" type="text" placeholder="Kontakt adresa-ulica i broj"style="color:blue;" name="kontaktadresa" ><?php echo $result['kontaktadresa'] ?></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td colspan="2">Kontakt adresa - postanski broj i mjesto</td>
                        <td colspan="3"> <input id="licnipostanskibroj" style="color:blue;" placeholder="Poštanski broj" type="number" name="licnipostanskibroj" ><?php echo $result['licnipostanskibroj'] ?></td>
                        <td placeholder="Mjesto" colspan="3"><input id="mjesto" placeholder="mjesto" style="color:blue;" type="text" name="mjesto" ><?php echo $result['mjesto'] ?></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td colspan="2">E-mail adresa</td>
                            <td colspan="7"><input id="licniemail" placeholder="Unesite E-mail adresu" style="color:blue; " style="color:blue;" type="email" name="licniemail" ><?php echo $result['licniemail'] ?></td>
                      
                    </tr>
                    <tr>
                        <td>11</td>
                        <td colspan="2">Stručna sprema:</td>
                        <td colspan="5">
                            DR <input type="radio" name="gender2" value="DR"> MR <input type="radio" name="gender2" value="MR"> VSS <input type="radio" name="gender2" value="VSS"> VŠS <input type="radio" name="gender2" value="VŠS"> SSS <input type="radio" name="gender2" value="SSS"> NIŽA <input type="radio" name="gender2" value="NIŽA"> VKV <input type="radio" name="gender2" value="VKV"> KV <input type="radio" name="gender2" value="KV"> PK <input type="radio" name="gender2" value="PK"> NK <input type="radio" name="gender2" value="NK"><?php echo $result['gender2'] ?></td>
                    </tr>
                    </table>
                    <br>
                    <br>
                    <h2 align="center;" style="font-size:13px; border:none;">
                    Treći dio - Podaci o osiguranju
                </h2>
        <table  style="border:solid 2px black; width: 209mm; text-align: center; height:20px; position:relative; top:10px;" >
          <tr>
              <td>1</td>
              <td colspan="2">Dnevno radno vrijeme:</td>
              <td colspan="5"> <input id="sati" placeholder="Sati" style="color:blue;" type="text" name="sati" > <?php echo $result['sati'] ?><input id="minute" placeholder="Minute" placeholder="Unesite E-mail adresu" style="color:blue; " type="text" 
                          name="minute" ><?php echo $result['minute'] ?></td>
          </tr>
          <tr>
              <td>2</td>
              <td colspan="2">Osnov osiguranja:</td>
              <td colspan="7"><input id="osnovosiguranja" placeholder="Osnov osiguranja" style="color:blue;" style="color:blue;" type="text" name="osnovosiguranja" ><?php echo $result['osnovosiguranja'] ?></td>
          </tr>
          <tr>
              <td>3</td>
              <td colspan="2">Zanimanje:</td>
              <td colspan="7"><input id="zanimanje" placeholder="Zanimanje" style="color:blue;" style="color:blue;" type="text" name="zanimanje" ><?php echo $result['zanimanje'] ?></td>
          </tr>
          <tr>
              <td>4</td>
              <td colspan="2">Stručna sprema koja se traži na radnom mjestu
              </td>
              <td colspan="7">  DR <input type="radio" name="gender3" value="DR"> MR <input type="radio" name="gender3" value="MR"> VSS <input type="radio" name="gender3" value="VSS"> VŠS <input type="radio" name="gender3" value="VŠS"> SSS <input type="radio" name="gender3" value="SSS"> NIŽA <input type="radio" name="gender3" value="NIŽA"> VKV <input type="radio" name="gender3" value="VKV"> KV <input type="radio" name="gender3" value="KV"> PK <input type="radio" name="gender3" value="PK"> NK <input type="radio" name="gender3" value="NK"><?php echo $result['gender3'] ?></td>
          </tr>
          <tr>
              <td>5</td>
              <td colspan="2">Datum prijave/odajve/promjene osiguranja</td>
              <td colspan="7"><input id="datumprijave" style="color:blue;" type="date" name="datumprijave" ><?php echo $result['datumprijave'] ?></td>
          </tr>
          <tr>
              <td>6</td>
              <td colspan="2">Osnov za uplatu doprinosa</td>
              <td colspan="7"><input id="osnovuplate" placeholder="Osnov za uplatu doprinosa" style="color:blue;"  type="text" name="osnovuplate" ><?php echo $result['osnovuplate'] ?></td>
  
          </tr>
          <tr>
              <td>7</td>
              <td colspan="2">Staž za uvećanim trajanjem</td>
              <td colspan="3">
                  <input id="sifraradnogmjesta" placeholder="Šifra radnog mjesta"   type="password" name="sifraradnogmjesta" ><?php echo $result['sifraradnogmjesta'] ?></td><td colspan="3">
              <input id="stepenuvecanja" type="text" placeholder="Stepen uvećanja" name="stepenuvecanja" ><?php echo $result['stepenuvecanja'] ?></td>
          </tr>
          </table>
          <br>
          <br>
          
          <h2 style="font-size:13px; border:none; float: left; height:20px;"> Ovjera predstavnika obveznika uplate doprinosa<br>
            finansija/financija Porezna uprava.</h2>
            <h2 style="font-size:13px; margin-right: 200px; border:none; height:20px;">Cetvrti dio - potvrda i prijem</h2>
            <h2 style="font-size:13px; float: right; border:none; height:20px; padding-right:10px; padding-bottom:5px;">Ovjera prijema u poreznoj upravi </h2>
        
        
          </h2>
          <table  style="border:solid 2px black; width: 209mm; text-align: center; height:20%; position:relative; top:13px;">
          <tr>
          <td colspan="3">Potpis podnosioca prijave:
          <input id="potpispodnosioca" placeholder="Unesi podatke" type="text" style="color:blue;" name="potpispodnosioca" ><?php echo $result['potpispodnosioca'] ?></td>
          
        </tr>
        <tr>
          <td colspan="3">Datum: <input id="datumpodnosioca" style="color:blue;" type="date" name="datumpodnosioca" ><?php echo $result['datumpodnosioca'] ?></td>
        </tr>
        <tr>
          <td>Ime i prezime službenika Porezne uprave:
              <input id="imeiprezimesluzbenikaporezneuprave" placeholder="Unesi podatke" type="text" style="color:blue" name="imeiprezimesluzbenikaporezneuprave" ><?php echo $result['imeiprezimesluzbenikaporezneuprave'] ?>
          </td>
        </tr>
        <tr>
          <td colspan="3">Ime i prezime lica koje je popunilo prijavu: <input id="imeiprezimelicakojejepopuniloprijavu" placeholder="Unesi podatke" style="color:blue;" type="text" name="imeiprezimelicakojejepopuniloprijavu" ><?php echo $result['imeiprezimelicakojejepopuniloprijavu'] ?></td>
        </tr>
        <tr>
          <td colspan="3">Potpis lica koje je popunilo prijavu
              <input id="imeiprezimelicakojejepopuniloprijavu" type="text" style="color:blue;" placeholder="Unesi podatke" name="imeiprezimelicakojejepopuniloprijavu" ><?php echo $result['imeiprezimelicakojejepopuniloprijavu'] ?>
          </td>
          </tr>
          <tr>
          <td>Potpis službenika Porezne prijave:
              <input id="potpissluzbenikaporezneprijave" type="text" style="color:blue;" placeholder="Unesi podatke" name="potpissluzbenikaporezneprijave" ><?php echo $result['potpissluzbenikaporezneprijave'] ?>
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
                  <input id="datumprijemaprijave" type="date" style="color:blue;" name="datumprijemaprijave" >
                  <?php echo $result['datumprijemaprijave'] ?></td>
            </tr>
        </table>

</div>
</body>
</html>
