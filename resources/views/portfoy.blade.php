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
        <h2 class="u-text u-text-1">Portfoy <br> <u>businesses</u>
        </h2>
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
                    <th class="u-table-cell">Cash Turkish Lira ₺</th>
                    <th class="u-table-cell" id="cash"></th>
                </tr>
                <tr>
                    <th class="u-table-cell">Total</th>
                    <th class="u-table-cell" id="total_cash"></th>
                </tr>
            </table>
        </div>
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
                    <th class="u-table-cell">Cost</th>
                    <th class="u-table-cell">Now Prıce</th>
                    <th class="u-table-cell">Profıt/Lose</th>
                    <th class="u-table-cell">Total</th>
                </tr>
                </thead>
                <tbody class="u-table-body" id="portfoy">

                </tbody>
            </table>
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
    function Portfoyget(){
        $.ajax({
            url: '{{route('getportfoy')}}',
            dataType: "json",
            success: function (response) {
                document.getElementById("portfoy").innerHTML=""
                let fiyat = '{{stock_value_str()}}'
                pieces = JSON.parse(fiyat.replace(/&quot;/g,'"'))
                console.log(pieces);
                console.log(response);
                let toplam = 0;
                for(obj in response.reverse()){
                    let satir = $("<tr>")
                    let hucre = $("<td>").text(response[obj]['stock'])
                    satir.append(hucre)
                    let hucre2 = $("<td>").text(response[obj]['piece'])
                    let hucre3 = $("<td>").text(response[obj]['cost'])
                    satir.append(hucre2)
                    satir.append(hucre3)
                    let hucre4 = $("<td>").text(pieces[response[obj]['stock']]['satis'])
                    satir.append(hucre4)
                    let hucre5 = $("<td>").text(Number(((pieces[response[obj]['stock']]['satis']-response[obj]['cost'])*response[obj]['piece']).toFixed(2))+'₺')
                    satir.append(hucre5)
                    toplam = toplam + (response[obj]['piece']*pieces[response[obj]['stock']]['satis']);
                    let hucre6 = $("<td>").text(response[obj]['piece']*pieces[response[obj]['stock']]['satis']+'₺')
                    satir.append(hucre6)
                    $("#portfoy").append(satir)
                }
                document.getElementById('total_cash').innerHTML = toplam + '₺';
            }
        });
        $.ajax({
            url: '{{route('getcash')}}',
            datatype: 'json',
            success: function (response){
                document.getElementById('cash').innerHTML=response['total_cash_balance']+'₺';
            }
        })
    }
    Portfoyget();
</script>
</body></html>
