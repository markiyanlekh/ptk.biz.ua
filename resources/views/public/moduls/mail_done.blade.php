<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="https://fonts.googleapis.com/css?family='Oswald'|Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>mail_done.blade</title>
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
    }
    .image_fix {display:block;}
    p {margin: 1em 0;}
    h1, h2, h3, h4, h5, h6 {color: black;}
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
   
    /* end Android targeting */
    .bgBody{
    background: transparent url('https://images.chamaileon.io/5bc76876d820cb00116447dc/bb2.jpg') center repeat;
    background-size: cover;
    }
    .bgItem{
    background-color: rgba(255,255,255,0.6)!important;
    margin:4% auto!important;
    }
    .icon
    {
    margin: 20px auto!important;
    width:52px;
    cursor: pointer;
    }
    h3{
    color:#181818;
    font-family: 'Oswald', sans-serif;
    font-stretch: condensed;
    font-size:22px;
    color: black!important;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 0.6px;
    }
    h4{
    font-family: 'Oswald', sans-serif;
    font-stretch: condensed;
    font-size:18px;
    color: #000;
    text-transform: uppercase;
    font-weight: 700;
    margin: 3%!important;
    letter-spacing: 0.2px;
    }
    .divider
    {
    height: 20px;
    border-top: 2px solid black;
    }
    .bot
    {
    border-color: transparent;
    }
    h2
    {
    color:#181818;
    font-family: 'Roboto Condensed', sans-serif;
    font-size:20px;
    font-weight: 400;
    
    letter-spacing: 0.6px!important;
    }
    h1
    {
    font-family: 'Oswald', sans-serif;
    font-size:22px;
    color: black;
    font-stretch: condensed;
    text-transform: none;
    letter-spacing: 0.5px;
    font-weight: 400;
    }
    .title
    {
    color: #000;
    background-color: rgba(255,255,255,0.2)!important ;
    font-size: 22px;
    line-height: 1rem!important;
    }
    strong
    {
    font-size: inherit;
    font-weight: 700;
    }
    .sender
    {
    background-color: grey;
    line-height: 1rem;
    }
    .pad
    {
    background-color: white!important;
    font-size: 20px!important;
    line-height: 1rem;
    }
    .pad > td
    {
    padding: 5px!important;
    }
    .gpad
    {
    background-color: grey;
    line-height: 1rem;
    }
    #box1{
    font-size: 20px;
    letter-spacing: 0.8px!important;
    background-color:  rgb(52,58,64)!important;
    }
    .customer{
    background-color: transparent;
    letter-spacing: 0.4px;
    line-height: 1rem;
    }
    p{
    color:#555;
    font-family:Helvetica, Arial, sans-serif;
    font-size:2px;
    line-height:180%;
    }
    .dark
    {
    color:#000!important;
    
    }
    .white
    {
    color:#fff;
    
    }
    .footer
    {
    height: 50px;
    }
    .topContainer
    {
    padding:5% 1%;
    line-height: 1.2rem!important;
    background-color: white;
    }
    </style>
  </head>
  <body>
    <table cellpadding="0" 
    style="background-image: url('https://images.unsplash.com/photo-1523872187875-ba17c5140d20?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f09f6a60c64a2640d07b75d90e5b9ff7');
    background-size: cover;background-color: transparent;" width="100%" cellspacing="0" border="0" id="backgroundTable" class='bgBody'>
      <tr>
        <td>
          <table cellpadding="0" cellspacing="0" border="0"   align="center" width="600" class='bgItem'>
            
            
            <tr>
              <td  width="150">
              </td>
              <td width="300" colspan="2" align="center">
                <img height="240px"  src="http://ptk.biz.ua/resources/pictures/success4.png">
                <h1><strong>Замовлення</strong></h1>
                <h1>успішно прийнято!</h1>
                
              </td>
              <td  width="150" >
              </td>
            </tr>
            <tr class="sender">
              <td width="600" colspan="4"  align="right" style="background-image: url('{{$message->embed($path)}}');height: 260px!important;background-position: center;" >
                
              </td>
            </tr>
            
            <tr id="box1" class="gpad title">
              <td width="100"></td>
              
              <td width="400" colspan="2" align="center"><h3 style="color: #fff!important;">Деталі</h3></td>
              <td width="100"></td>
            </tr>
            <tr class="gpad ">
              <td width="100"></td>
              
              <td width="400" colspan="2" align="center"><h1><br></h1></td>
              <td width="100"></td></tr>
              <tr class="sender">
                <td width="100"></td>
                <td width="100">
                  <h3>КОД ID</h3>
                </td>
                <td width="300" align="right"><h2>{{$p_id}}</h2></td>
                <td width="100"></td>
              </tr>
              <tr class="sender">
                <td width="100"></td>
                <td width="100">
                  <h3>Дата</h3>
                </td>
                <td width="300" align="right"><h2> {{$date}}</h2></td>
                <td width="100"></td>
              </tr>
              <tr class="sender">
                <td width="100"></td>
                <td width="100">
                  <h3>Розмір</h3>
                </td>
                <td width="300" align="right"><h2> {{$size}}</h2></td>
                <td width="100"></td>
              </tr>
              <tr class="sender" >
                <td width="100"></td>
                <td width="100">
                  <h3>Назва</h3>
                </td>
                <td width="300" align="right"><h2>{{$p_name." ".$p_category}}</h2></td>
                <td width="100"></td>
              </tr>
              <tr class="sender">
                <td width="100"></td>
                <td width="100">
                  <h3>Ескіз</h3>
                </td>
                <td width="300" align="right">
                  @if($plain)
                  <h2>
                  <a href="http://ptk.biz.ua/order_docs/{{$filename}}">
                  {{$filename}}</a></h2>
                  @else<h2>Відсутній</h2>
                @endif</td>
                <td width="100"></td>
              </tr>
              <tr class="gpad">
                <td width="100"></td>
                
                <td width="400" colspan="2" align="center"><h1><br></h1></td>
                <td width="100"></td>
              </tr>
              <tr class="title pad">
                <td width="100"></td>
                <td width="400" align="center" colspan="2"><h3>Отримувач</h3></td>
                <td width="100"></td>
              </tr>
              
              
              <tr class="pad">
                <td width="100"></td>
                <td width="100">
                  <h3>Ім'я</h3>
                </td>
                <td width="300" align="right"><h2 class="dark">{{$name}}</h2></td>
                <td width="100"></td>
              </tr>
              <tr class="pad">
                <td width="100"></td>
                <td width="100">
                  <h3>Телефон</h3>
                </td>
                <td width="300" align="right"><h2 class="dark">{{$tel}}</h2></td>
                <td width="100"></td>
              </tr>
              <tr class="pad" >
                <td width="100"></td>
                <td width="100">
                  <h3>E-mail</h3>
                </td>
                <td width="300" align="right"><h2 class="dark">{{$email}}</h2></td>
                <td width="100"></td>
              </tr>
              <tr class="pad" >
                <td width="100"></td>
                <td width="100">
                  <h3>Компанія</h3>
                </td>
                <td width="300" align="right"><h2 class="dark">{{$corp}}</h2></td>
                <td width="100"></td>
              </tr>
              
              
              
              
              <tr>
                <td width="100"></td>
                <td style="padding: 0px!important;" align="center" width="400" colspan="2">
                  <img class="icon" src="http://ptk.biz.ua/resources/pictures/logo17.png" >
                </td>
                <td width="100"></td>
              </tr>
              
              
            </table>
            
            
            
          </td>
        </tr>
      </table>
      
      
    </body></html>