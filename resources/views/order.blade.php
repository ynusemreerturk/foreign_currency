<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Our work transforms businesses">
    <meta name="description" content="">
    <title>My account</title>
    <link rel="stylesheet" href="{{asset('site2/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('site2/Giris.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('site2/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('site2/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">

    <meta property="og:title" content="Giriş">
    <meta property="og:type" content="website">
</head>
<body class="u-body u-xl-mode" data-lang="tr"><header class="u-clearfix u-header u-header" id="sec-1e64"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
            <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                        </g></svg>
                </a>
            </div>
            <div class="u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{route('portfoy')}}" style="padding: 10px 20px;">Portföy</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{route('order')}}" style="padding: 10px 20px;">Order</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{route('stocks')}}" style="padding: 10px 20px;">Stocks</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{route('logout')}}" style="padding: 10px 20px;">Exit</a>
                    </li></ul>
            </div>
        </nav>
    </div></header>
<section class="u-clearfix u-section-1" id="carousel_fda3">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">Deposit/Withdraw <br> <u>businesses</u>
        </h2>
        <p class="u-text u-text-2"></p>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <table class="u-table-entity u-table-entity-1">
                <colgroup>
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                </colgroup>
                <thead class="u-black u-custom-font u-heading-font u-table-header u-table-header-1">
                <tr>
                    <th class="u-table-cell" style="font-size: xx-large; text-align: center" >₺ </th>

                </tr>
                </thead>
                <tbody class="u-table-body">
                <form  action="{{route('cash.post')}}" id="my_form" method="post" >
                    @csrf
                    <tr>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"><input type="number" value="0" name="cash" id="nakit"></td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"><input type="radio" value="deposit" name="islem"> Deposit <input type="radio" value="withdraw" name="islem"> Withdraw</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"><input type="submit" value="send"></td>
                    </tr>
                </form>
                </tbody>
            </table>
        </div>
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">Order<br> <u>businesses</u>
        </h2>
        <p class="u-text u-text-2"></p>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <table class="u-table-entity u-table-entity-1">
                <colgroup>
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                </colgroup>
                <thead class="u-black u-custom-font u-heading-font u-table-header u-table-header-1">
                    <tr>
                        <th class="u-table-cell">STOCK SEMBOL</th>
                        <th class="u-table-cell">Pıece</th>
                        <th class="u-table-cell">Prıce</th>
                        <th class="u-table-cell">Total</th>
                        <th class="u-table-cell">Sell</th>
                        <th class="u-table-cell">Buy</th>
                    </tr>
                </thead>
                <tbody class="u-table-body">
                <form  action="{{route('order.post')}}" id="my_form_order" method="post" >
                    @csrf
                    <tr>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">
                            <select name="sembol" id="sembol">

                            </select>
                        </td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"><input type="number" value="0" name="piece" id="piece"></td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"><input type="text" name="price" id="price" ></td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell" name = "total" id="total" ></td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"><input type="radio" value="sell" name="islem"> SELL <input type="radio" value="buy" name="islem"> BUY</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"><input type="submit" value="send"></td>
                    </tr>
                </form>
                </tbody>
            </table>
        </div>
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-1">Last Order<br> <u>businesses</u>
            </h2>
            <p class="u-text u-text-2"></p>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <table class="u-table-entity u-table-entity-1">
                <colgroup>
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                </colgroup>
                <thead class="u-black u-custom-font u-heading-font u-table-header u-table-header-1">
                <tr>
                    <th class="u-table-cell">STOCK SEMBOL</th>
                    <th class="u-table-cell">Pıece</th>
                    <th class="u-table-cell">Prıce</th>
                    <th class="u-table-cell">sell/buy</th>
                    <th class="u-table-cell">Instant</th>
                </tr>
                </thead>
                <tbody class="u-table-body" id="orders">

                </tbody>
            </table>
            </div>
        </div>
    </div>
</section>

<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-616d"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Örnek metin. Metin Öğesini seçmek için tıklayın.</p>
    </div></footer>
<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
    </a>
    <p class="u-text">
        <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
    </a>.
</section>
<script>
    $.ajax({
        url: '{{route('stockvalues')}}',
        dataType: "json",
        success: function (response) {
            for(obj in response){
                let satir = $("<option>").text(obj)
                $("#sembol").append(satir)
            }
            let deger = response[$("#sembol").val()]['alis'];
            document.getElementById("price").value=deger;
        }
    });
    $("#my_form_order").submit(function(event){
        event.preventDefault(); //burada tıklanınca post işlemi yapmasın diye önlem alıyoruz
        var post_url = $(this).attr("action"); //formun urlsi alınıyor
        var request_method = $(this).attr("method"); //formun metodu alınıyor
        var form_data = $(this).serialize(); //formun datası alınıyor
        $.ajax({
            url : post_url,
            type: request_method,
            data : form_data
        }).done(function(response){
        })
        Orderget();
    });
    $("#my_form").submit(function(event){
        event.preventDefault(); //burada tıklanınca post işlemi yapmasın diye önlem alıyoruz
        var post_url = $(this).attr("action"); //formun urlsi alınıyor
        var request_method = $(this).attr("method"); //formun metodu alınıyor
        var form_data = $(this).serialize(); //formun datası alınıyor
        $.ajax({
            url : post_url,
            type: request_method,
            data : form_data
        }).done(function(response){

        })
    });
    $("#sembol").on("change",function(){
        $.ajax({
            url: '{{route('stockvalues')}}',
            dataType: "json",
            success: function (response) {
                document.getElementById('price').innerHTML='';
                document.getElementById("price").value=response[$("#sembol").val()]['alis'];
                document.getElementById('piece').value=0;

            }
        });
    })
        function Orderget(){
            $.ajax({
                url: '{{route('getorder')}}',
                dataType: "json",
                success: function (response) {
                    document.getElementById("orders").innerHTML=""
                    for(obj in response.reverse()){
                        let satir = $("<tr>")
                        let hucre = $("<td>").text(response[obj]['stock'])
                        satir.append(hucre)
                        let hucre2 = $("<td>").text(response[obj]['want_piece'])
                        let hucre3 = $("<td>").text(response[obj]['want_price'])
                        satir.append(hucre2)
                        satir.append(hucre3)
                        switch (response[obj]['sell_buy']){
                            case 0:
                                let hucre7 = $("<td>").text('BUY');
                                satir.append(hucre7);
                                break;
                            case 1:
                                let hucre8 = $("<td>").text('SELL');
                                satir.append(hucre8);
                                break;
                        }
                        switch (response[obj]['instant_status']) {
                            case 0:
                                let hucre4 = $("<td>").text('successful');
                                satir.append(hucre4);
                                break;
                            case 1:
                                let hucre5 = $("<td>").text('on hold');
                                satir.append(hucre5);
                                break;
                            case 2:
                                let hucre6 = $("<td>").text('cancel');
                                satir.append(hucre6);
                                break;
                        }
                        let hucre7 = $("<td>");
                        satir.append(hucre7);
                        $("#orders").append(satir)
                    }
                }
            });
        }
        Orderget()
        /**
         $(function (){
        $('#orders').DataTables({
            processing: true,
            serverSide: true,
            ajax: 'getorder',
            columns: [
                {data:'stock', name:'stock' },
                {data:'want_piece', name:'piece'},
                {data:'want_price', name:'price' },
                {data:'instant_status', name:'instant' },
            ]
        })
    })
          */


</script>
</body>
</html>



