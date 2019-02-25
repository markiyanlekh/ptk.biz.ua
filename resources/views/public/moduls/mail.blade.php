<!DOCTYPE>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>

  <title>mail</title>
   <link rel="stylesheet"
    type="application/json" 
    href=" https://www.googleapis.com/webfonts/v1/webfonts?fields=items%2Ckind&
    key=">

  <style type="text/css">

  #outlook a {padding:0;}
    body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
    .ExternalClass {width:100%;}
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
    #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
    img
    {
      width: 100%;
      padding: 0px;
      max-height: 200px!important;
    }
    .image_fix {display:block;}
    p {margin: 1em 0;}
    h1, h2, h3, h4, h5, h6 {color: black !important;}

    h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

    h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
      color: red !important; 
     }

    h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
      color: purple !important; 
    }

    table td {border-collapse: collapse;
      background-size: cover;
      background-position: top;
    }

    table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

    a {color: #000;}

    @media only screen and (max-device-width: 480px) {

      a[href^="tel"], a[href^="sms"] {
            text-decoration: none;
            color: black; /* or whatever your want */
            pointer-events: none;
            cursor: default;
          }

      .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
            text-decoration: default;
            color: orange !important; /* or whatever your want */
            pointer-events: auto;
            cursor: default;
          }
    }


    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
      a[href^="tel"], a[href^="sms"] {
            text-decoration: none;
            color: blue; /* or whatever your want */
            pointer-events: none;
            cursor: default;
          }

      .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
            text-decoration: default;
            color: orange !important;
            pointer-events: auto;
            cursor: default;
          }
    }
  
    @media only screen and (-webkit-min-device-pixel-ratio: 2) {
      /* Put your iPhone 4g styles in here */
    }

    @media only screen and (-webkit-device-pixel-ratio:.75){
      /* Put CSS for low density (ldpi) Android layouts in here */
    }
    @media only screen and (-webkit-device-pixel-ratio:1){
      /* Put CSS for medium density (mdpi) Android layouts in here */
    }
    @media only screen and (-webkit-device-pixel-ratio:1.5){
      /* Put CSS for high density (hdpi) Android layouts in here */
    }
    /* end Android targeting */
.bgBody{
  background-image: url('https://images.chamaileon.io/5bc76876d820cb00116447dc/bb2.jpg');
  background-repeat: no-repeat;
  background-size: cover;

}
.bgItem{
  background: rgba(255,255,255,0.6);
  margin:4% auto!important;

}
h3{

 color:#181818;
 font-family: Oswald, sans-serif;
 font-stretch: condensed;
 font-size:24px;
 color: #000!important;
 text-transform: uppercase;
 font-weight: 700;
letter-spacing: 0.6px;
}

.divider
{
  height: 20px;
  border-top: 2px solid black;
}
.bot
{
  border-color: transparent!important;
}
h2
{
 color:#181818;
 font-family: Roboto Condensed, sans-serif;
 font-size:22px!important;
 font-weight: 400;
  
    letter-spacing: 0.6px!important;
}
.comment
{
  color:black;
 font-family: Roboto Condensed, sans-serif;
 font-size:22px!important;
 font-weight: 400;
 line-height: 1.5rem;
 min-height: 0px;
 padding: 10px!important;
 font-stretch: condensed;
 text-align: justify;

    letter-spacing: 0.6px!important;
    background-color: white!important;
}
h1
{
  font-family: Oswald, sans-serif;
  font-size:30px!important;
  color: #000!important;
  text-transform: uppercase;
  font-stretch: condensed;
  font-weight: 700;
  vertical-align: middle;
  word-spacing: 5px;
 }
 .sender
 {
  background-color: grey;
  line-height: 1.5rem;
 }
#box1{
  height: 80%;
  margin: 10%!important;
  background-color:  rgba(52,58,64,0.6);


}
.icon
{
  width: 52px!important;
  margin: 15px auto;
  cursor: pointer;
}
p{
  color:#555;
  font-family:Helvetica, Arial, sans-serif;
  font-size:22px;
  line-height:180%;
}
.footer
{
  height: 50px;
}
.topContainer
{
  border-bottom: 2px solid black;
}
</style>
</head>
<body>
  <table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class='bgBody'>
  <tr>
    <td>

    <table cellpadding="0" cellspacing="0" border="0"   align="center" width="600" class='bgItem'>
      <tr>
            
              <td colspan="4" style="padding: 15px 0px!important;"  class="topContainer" width="600" align="center">
                <h1>               
                  Замовлення #{{$id}}
                  </h1>
              </td>
            </tr>
              <tr class="sender">
              <td width="100"></td>
              <td width="100">
                <h3>Ім'я</h3>
              </td>
              <td width="300" align="right"><h2>{{$name}}</h2></td>
              <td width="100"></td>
            </tr>
            <tr class="sender">
            <td width="100"></td>
              <td width="100">
                <h3>Підприємство</h3>
              </td>
              <td width="300" align="right"><h2>{{$corp}}</h2></td>
              <td width="100"></td>
              </tr>
              <tr class="sender">
              <td width="100"></td>
              <td width="100">
                <h3>E-mail</h3>
              </td>
              <td width="300" align="right"><h2>{{$email}}</h2></td>
              <td width="100"></td>
            </tr>
            <tr class="sender">
            <td width="100"></td>
              <td width="100">
                <h3>Телефон</h3>
              </td>
              <td width="300" align="right"><h2>{{$tel}}</h2></td>
              <td width="100"></td>
            </tr>
            <tr class="divider">
              <td width="100"></td>
              <td width="100"></td>
              <td width="300"></td>
              <td width="100"></td>
            </tr>
            <tr>
              <td width="100"></td>
              <td width="100">
                <h3>Дата</h3>
              </td>
              <td width="300" align="right"><h2>{{$date}}</h2></td>
              <td width="100"></td>
            </tr>
            <tr >
              <td width="100"></td>
              <td width="100">
                <h3>Назва</h3>
              </td>
              <td width="300" align="right"><h2>{{$p_category}}</h2></td>
              <td width="100"></td>
            </tr>
             <tr >
              <td width="100"></td>
              <td width="100">
              </td>
              <td width="300" align="right"><h2>{{$p_name}}</h2></td>
              <td width="100"></td>
            </tr>
                <tr>
              <td width="100"></td>
              <td width="100">
                <h3>Код товару</h3>
              </td>
              <td width="300" align="right"><h2>{{$p_id}}</h2></td>
              <td width="100"></td>
            </tr>
            <tr>
              <td width="100"></td>
              <td width="100">
                <h3>Розмір</h3>
              </td>
              <td width="300" align="right"><h2>{{$size}}</h2></td>
              <td width="100"></td>
            </tr>
            
            <tr>
              <td width="100"></td>
              <td width="100">
                <h3>Ескіз</h3>
              </td>
              <td width="300" align="right">
                          @if($filename!="")
                            <h2>
                            <a href="http://ptk.biz.ua/order_docs/{{$filename}}">
                            {{$filename}}</a></h2>
                          @else 
                          <h2>Відсутній</h2>
                          @endif</td>
              <td width="100"></td>
            </tr>
    
            <tr>
              <td width="100"></td>
              
              <td width="400" colspan="2" align="center"><h3>Коментар</h3></td>
              <td width="100"></td>
            </tr>
            <tr>
              <td width="100"></td>
              
              <td width="400" colspan="2" ><p class="comment">&#8195;{{$comment}}</p></td>
              <td width="100"></td>
            </tr>
            <tr class="divider bot">
              <td width="100"></td>
              <td width="100"></td>
              <td width="300"></td>
              <td width="100"></td>
            </tr>
                 <tr>       
              <td width="600" colspan="4"  align="right" style="background-image: url('{{$message->embed($path)}}');height: 280px!important;" >
              </td>

            </tr>
           <tr>
              <td align="center" colspan="4"  width="600">
                 <a href="http://ptk.biz.ua" class="nolink">
                <img class="icon" src="http://ptk.biz.ua/resources/pictures/logo17.png"></a>
               
              </td>
            </tr>
       
          
         </table>
              
   
          
                </td>

            </tr>
          </table>
       

       
</body></html>
