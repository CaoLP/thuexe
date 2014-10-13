
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title></title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');

    echo $this->Html->css(
        array(
            'style',
            'jquery-ui',
            '//fonts.googleapis.com/css?family=Roboto&subset=latin,vietnamese',
            '//fonts.googleapis.com/css?family=Noto+Serif:400italic&subset=latin,vietnamese',
            '//fonts.googleapis.com/css?family=Roboto+Condensed:700&subset=vietnamese,latin',
            '//fonts.googleapis.com/css?family=Noticia+Text:400italic&subset=latin,vietnamese',
        )
    );
    echo $this->Html->script(
        array(
            '//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js',
            'script-popup',
        )
    );
    echo $this->fetch('script');
    ?>
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />

    <style type="text/css">
        body,td,th {
            font-family: Roboto, sans-serif;
            font-size: 12px;
        }
        a:link {
            color: #003366;
        }
        a:visited {
            color: #003366;
        }
        a:hover {
            color: #990000;
        }
        h1{
            font-family: "Roboto Condensed", sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #036;
            padding: 2px;}
        h2,h3,h4,h5,h6 {
            font-family: "Roboto Condensed", sans-serif;}
    </style>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <script type="text/javascript">
    function MM_swapImgRestore() { //v3.0
    var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
    }
    function MM_findObj(n, d) { //v4.01
        var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
            d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
        if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
        for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
        if(!x && d.getElementById) x=d.getElementById(n); return x;
    }
    function MM_swapImage() { //v3.0
        var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
            if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
    }
    </script>
</head>
<body>
<div style="height:180px; background-image:url(images/2014/bg-top.gif)">
    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" id="normal">
        <tr>
            <td background="images/2014/logo-saigontourist-tdong.gif"align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="350" align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" valign="top"><a href="index.php"><img src="http://cdn.dulichhe.com/images/2014/spacer.gif" width="300" height="83"></a></td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
                                    </td>
                                </tr>
                            </table></td>
                        <td width="10" align="left" valign="top"><img src="http://cdn.dulichhe.com/images/2014/spacer.gif" width="10" height="114"></td>
                        <td align="center" valign="middle">

                            <a href="tinsaigontourist_chitiet.php?newsID=11104" target="_blank"><img src="http://cdn.dulichhe.com/images/2014/banner-danhhieucaoquy.gif" width="540" height="101" alt="Chương trình ưu đãi dành cho khách hàng Saigontourist"></a>
                            &nbsp;</td>
                    </tr>
                </table></td>
        </tr>
        <tr>
            <td align="left" valign="top"><table width="98%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center" valign="top"><a href="index.php"><img src="http://cdn.dulichhe.com/images/2014/menu-home-icon.gif" width="47" height="63" alt="Trang chu"></a></td>
                        <td align="center" valign="top"><a href="trongnuoc.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('tour trong nuoc','','images/2014/menu-tourtrongnuoc-hover.gif',1)"><img src="http://cdn.dulichhe.com/images/2014/menu-tourtrongnuoc.gif" alt="Tour trong nuoc" width="169" height="63" id="tour trong nuoc"></a></td>
                        <td align="center" valign="top"><a href="nuocngoai.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('tournuocngoai','','images/2014/menu-tournuocngoai-hover.gif',1)"><img src="http://cdn.dulichhe.com/images/2014/menu-tournuocngoai.gif" alt="Tour nuoc ngoai" width="163" height="63" id="tournuocngoai"></a></td>
                        <td align="center" valign="top"><a href="vemaybay.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('vemaybay','','images/2014/menu-vembay-hover.gif',1)"><img src="http://cdn.dulichhe.com/images/2014/menu-vembay.gif" alt="Ve may bay" width="115" height="63" id="vemaybay"></a></td>
                        <td align="center" valign="top"><a href="thuexe.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('thuexe','','images/2014/menu-thuexe-hover.gif',1)"><img src="http://cdn.dulichhe.com/images/2014/menu-thuexe.gif" alt="Thue Xe" width="88" height="63" id="thuexe"></a></td>
                        <td align="center" valign="top"><a href="lienhe.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('lienhe','','images/2014/menu-lienhe-hover.gif',1)"><img src="http://cdn.dulichhe.com/images/2014/menu-lienhe.gif" alt="Lien he" width="85" height="63" id="lienhe"></a></td>
                        <td align="center" valign="top"><a href="#" class="topopup"><img src="http://cdn.dulichhe.com/images/2014/menu-2icon.gif" width="116" height="63" alt="hotline"></a></td>
                        <td align="center" valign="top"><a href="javascript:void(0)" onclick="$('#search_div').slideToggle('fast')"><img src="http://cdn.dulichhe.com/images/2014/menu-timtour.gif" width="134" height="63" alt="Tim tour"></a></td>
                    </tr>
                </table></td>
        </tr>
    </table>
</div>
<div id="search_div" style="background-color: #FFFFCC;;display:none">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="div-search">
        <tr>
            <td valign="top">

                <script>

                    function searchTour(){
                        //var khoihanhtu = $("#khoihanhtu").val();
                        var searchin = $("input[name='searchin']:checked").val()
                        var diemden_nuocngoai = $("#diemden_nuocngoai").val();
                        var diemden_trongnuoc = $("#diemden_trongnuoc").val();
                        var price = $("#price").val();
                        var thoigian = $("#thoigian").val();
                        /*if(khoihanhtu == 0){
                         alert("Bạn vui lòng chọn khởi hành từ đâu");
                         $("#khoihanhtu").focus();
                         return false;
                         }*/
                        var sListDiemDen = "";
                        if (searchin == 2){
                            $("#diemden_nuocngoai :selected").each(function(i, selected){
                                if (sListDiemDen == "") sListDiemDen = $(selected).val();
                                else sListDiemDen += "," + $(selected).val();
                            });
                            window.location = 'nuocngoai.php?diemden=' + sListDiemDen + '&price=' + price + '&thoigian=' + thoigian;
                            //khoihanhtu=' + khoihanhtu + '&
                        }
                        else{
                            $("#diemden_trongnuoc :selected").each(function(i, selected){
                                if (sListDiemDen == "") sListDiemDen = $(selected).val();
                                else sListDiemDen += "," + $(selected).val();
                            });
                            window.location = 'trongnuoc.php?diemden=' + sListDiemDen + '&price=' + price + '&thoigian=' + thoigian;
                            //khoihanhtu=' + khoihanhtu + '&
                        }
                    }
                </script>
                <style>

                    .ui-autocomplete {
                        max-width: 200px;
                    }
                    /* IE 6 doesn't support max-height
                     * we use height instead, but this forces the menu to always be this tall
                     */
                    * html .ui-autocomplete {
                        width: 200px;
                    }

                    .ui-corner-all
                    {
                        font-size:11px;
                        font-weight:normal;
                    }

                    .ui-autocomplete-loading {
                        background: white url('http://cdn.dulichhe.com/images/ui-anim_basic_16x16.gif') right center no-repeat;
                    }
                    #city { width: 25em; }
                </style>
                <script>
                    $(function() {

                        $( "#search_field" ).autocomplete({
                            source: "http://www.dulichthu-dong.com/ajax/search_multiple.php",
                            minLength: 1,
                            select: function( event, ui ) {
                                //$("#search_field").val(ui.item.label);
                                //alert(ui.item.link);;
                                document.location = ui.item.link;
                            },
                            open: function() {
                                $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
                            },
                            close: function() {
                                $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
                            }
                        });
                    });
                </script>
                <table width="100%" border="0" cellpadding="5" cellspacing="0" class="normal-text">
                    <tr>
                        <td width="200" align="left" valign="top"><strong>Tìm theo từ khóa</strong></td>
                        <td colspan="6" align="left" valign="top"><input style="width:300px;" name="search_field" type="text" class="form-tet" id="search_field" value="Nhập tên tour - Và chọn tour"  onfocus="if (this.value=='Nhập tên tour - Và chọn tour') { this.value='';  this.style.color='#000'; }" onblur="if (this.value=='') { this.value='Nhập tên tour - Và chọn tour'; this.style.color='#CCC';}" /></td>
                    </tr>
                    <tr>
                        <td align="left" valign="top"><strong>Tìm theo điều kiện nâng cao</strong></td>
                        <td width="100" align="left" valign="top"><input name="searchin" type="radio" id="inbound" onclick="$('#diemden_nuocngoai').hide();$('#diemden_trongnuoc').show();" value="1" checked="checked"  checked="checked"/>
                            <label for="inbound">Trong nước</label></td>
                        <td width="100" align="left" valign="top"><input  type="radio" name="searchin" id="outbound" value="2" onclick="$('#diemden_trongnuoc').hide();$('#diemden_nuocngoai').show();" />
                            <label for="outbound">Nước ngoài</label></td>
                        <td align="left" valign="top">Nơi đến<br />
                            <select name="diemden_nuocngoai" class="normal-form" id="diemden_nuocngoai" style="display: none">
                                <option value="0">Chọn điểm đến ...</option>
                                <option value="208" >Anh</option>
                                <option value="204" >Ai C&#07853;p</option>
                                <option value="196" >&#07844;n &#00272;&#07897;</option>
                                <option value="251" >Ti&#07875;u v&#00432;&#00417;ng qu&#07889;c &#07842; R&#07853;p</option>
                                <option value="146" >Brunei</option>
                                <option value="147" >Campuchia</option>
                                <option value="248" >Canada</option>
                                <option value="250" >Cuba</option>
                                <option value="97" >Ch&#00226;u &#00194;u</option>
                                <option value="239" >&#00272;&#00224;i Loan</option>
                                <option value="171" >H&#00224;n Qu&#07889;c</option>
                                <option value="98" >Hong Kong</option>
                                <option value="210" >Indonesia</option>
                                <option value="256" >Israel</option>
                                <option value="238" >L&#00224;o</option>
                                <option value="112" >M&#07929;</option>
                                <option value="241" >Macao</option>
                                <option value="148" >Malaysia</option>
                                <option value="245" >Myanmar</option>
                                <option value="113" >Nam Phi</option>
                                <option value="150" >Nh&#07853;t B&#07843;n</option>
                                <option value="158" >Nga</option>
                                <option value="246" >New Zealand</option>
                                <option value="242" >Philippines</option>
                                <option value="83" >Singapore</option>
                                <option value="82" >Th&#00225;i Lan</option>
                                <option value="243" >Th&#07893; Nh&#00297; K&#07923; - Hy L&#07841;p</option>
                                <option value="81" >Trung Qu&#07889;c</option>
                                <option value="172" >Du thuy&#07873;n</option>
                                <option value="99" >&#00218;c</option>
                            </select><select name="diemden_trongnuoc" class="normal-form" id="diemden_trongnuoc" style="display: ">
                                <option value="0">Bất kỳ ...</option>
                                <option value="1" >Phan Thiết</option>
                                <option value="2" >Phú Quốc</option>
                                <option value="3" >Nha Trang</option>
                                <option value="4" >Đà Lạt</option>
                                <option value="5" >Tây Nguyên</option>
                                <option value="6" >ĐBSCL</option>
                                <option value="7" >Đà Nẵng -Huế</option>
                                <option value="8" >Hà Nội</option>
                                <option value="9" >Hạ Long</option>
                                <option value="10" >Sapa</option>
                                <option value="11" >Côn Đảo</option>
                                <option value="12" >Hồ Chí Minh & lân cận</option>
                                <option value="13" >Tuy Hòa - Quy Nhơn</option>
                                <option value="14" >Thanh Hóa</option>
                            </select>
                        </td>
                        <td align="left" valign="top">Giá từ
                            <select name="price" class="normal-form" id="price">
                                <option value="0">Chọn giá ...</option>
                                <option>Tất cả</option>
                                <option value="1" >1-5 triệu</option>
                                <option value="2" >5-10 triệu</option>
                                <option value="3" >10-20 triệu</option>
                                <option value="4" >Trên 20 triệu</option>
                            </select></td>
                        <td align="left" valign="top">Thời gian
                            <select name="thoigian" class="normal-form" id="thoigian">
                                <option value="-1">Đi mấy ngày?</option>
                                <option value="0">Tất cả</option>
                                <option value="1" >1 ngày</option>
                                <option value="2" >2-4 ngày</option>
                                <option value="3" >5-7 ngày</option>
                                <option value="4" >Hơn 7 ngày</option>
                            </select></td>
                        <td align="left" valign="top">
                            <input onclick="return searchTour();" type="button" name="button" id="button" value="Tìm" /></td>
                    </tr>
                </table></td>
        </tr>
    </table>
</div>

<div style="background-image: url(images/2014/slogon-top-nd5.jpg); background-position:center; background-repeat:no-repeat; height: 155px; width: 100%;" align='center'><a href="trongnuoc.php?clear_view=1&groupID=42"><img src="http://cdn.dulichhe.com/images/spacer.gif" width="739" height="149"></a></div>

<div id="noidungchinh" style="width:1000px;margin:auto">
<table width="100%" border="0" cellspacing="9" cellpadding="0">
<tr>
<td align="left" valign="top" class="tieuchuan"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td align="left" valign="top" class="navigator">Điểm khởi hành &#8250; <a href="http://www.dulichthu-dong.com/?location=hcm&return=http%3A%2F%2Fwww.dulichthu-dong.com%2Ftrongnuoc.php">TP.HCM & KV miền Nam</a> | <a href="http://www.dulichthu-dong.com/?location=hn&return=http%3A%2F%2Fwww.dulichthu-dong.com%2Ftrongnuoc.php">Hà Nội & KV miền Bắc</a> | <a href="http://www.dulichthu-dong.com/?location=dn&return=http%3A%2F%2Fwww.dulichthu-dong.com%2Ftrongnuoc.php">Đà Nẵng & KV miền Trung</a> | <a href="http://www.dulichthu-dong.com/?location=nt&return=http%3A%2F%2Fwww.dulichthu-dong.com%2Ftrongnuoc.php">Nha Trang</a></td>
</tr>
<tr>
    <td align="left" valign="top" class="tieuchuan">&nbsp;</td>
</tr>
<tr>
<td align="left" valign="top" class="tieuchuan"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="2">
            <tr>
                <td width="50%" align="left" valign="top"><img src="http://cdn.dulichhe.com/images/2014/cac-tour-dang-ban-online.gif" width="271" height="45" /></td>
                <td width="50%" align="right" valign="top"><img src="http://cdn.dulichhe.com/images/2014/goi-tu-van.gif" width="239" height="50" alt="Goi tu van"></td>
            </tr>
        </table></td>
</tr>
<tr>
<td align="left" valign="top"><div id="listtour_div">
<table width="100" border="0" cellpadding="0" cellspacing="0" class="tieuchuan">
<tr>
    <td align="left" valign="top"><img src="http://cdn.dulichhe.com/images/2014/table-tentour.gif" width="405" height="45" /></td>
    <td align="left" valign="top"><img src="http://cdn.dulichhe.com/images/2014/table-mua.gif" width="328" height="45" /></td>
</tr>
<tr>
    <td align="left" valign="top"><p><a href="http://www.dulichthu-dong.com/trong-nuoc/3005/Du-lich-Can-Tho---Chau-Doc---Ha-Tien" class="link-level2">
                Du l&#07883;ch C&#07847;n Th&#00417; - Ch&#00226;u &#00272;&#07889;c - H&#00224; Ti&#00234;n                      </a></p>
        <p>
            <a href="http://www.dulichthu-dong.com/trong-nuoc/3005/Du-lich-Can-Tho---Chau-Doc---Ha-Tien"><img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_135x80_trasu_7528.jpg" width="135" hspace="3" vspace="3" border="0" align="left" /></a>
        <p>
            <img src="http://cdn.dulichhe.com/images/allsite/khoihanhdanang.gif" alt="Khoi hanh" width="161" height="18">                          <br />
            Thời gian:
            4 ng&#00224;y 3 &#00273;&#00234;m                          <br />
            Phương tiện:
            Bay v&#07899;i HK VietJet (VJ)                          <br />
            Khởi hành:
            Th&#07913; 5, 7 h&#00224;ng tu&#07847;n                          <br />
        </p></td>
    <td align="center" valign="top">                      <table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">09/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=7740"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">11/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=7741"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">16/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=7742"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">18/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=7743"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr class="btn_tourID_3005">
                <td colspan="3" align="center"><a href="javascript:;" onclick="$('.btn_tourID_3005').hide();$('.tourID_3005').show();">[xem thêm]</a></td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">23/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=7744"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">25/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=7745"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">30/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=7746"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">01/11</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=8583"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">06/11</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=8584"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">08/11</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=8585"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">13/11</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=8586"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">15/11</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=8587"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">20/11</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=8588"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">22/11</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=8589"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">27/11</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=8590"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_3005">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">29/11</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            3.370.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=3005&phongID=8591"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td align="left" valign="top"><p><a href="http://www.dulichthu-dong.com/trong-nuoc/2952/Dailytour-Hue---Dong-Thien-Duong" class="link-level2">
                Dailytour: Hu&#07871; - &#00272;&#07897;ng Thi&#00234;n &#00272;&#00432;&#07901;ng                      </a></p>
        <p>
            <a href="http://www.dulichthu-dong.com/trong-nuoc/2952/Dailytour-Hue---Dong-Thien-Duong"><img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_135x80_dong_thien_duong_2_-_du_lich_sen_vang_1_5029.jpg" width="135" hspace="3" vspace="3" border="0" align="left" /></a>
        <p>
            <img src="http://cdn.dulichhe.com/images/allsite/khoihanhdanang.gif" alt="Khoi hanh" width="161" height="18">                          <br />
            Thời gian:
            1 ng&#00224;y                          <br />
            Phương tiện:
            &#00272;i v&#00224; v&#07873; b&#07857;ng xe                          <br />
            Khởi hành:
            H&#07857;ng ng&#00224;y                          <br />
        </p></td>
    <td align="center" valign="top">                      <table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">13/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8564"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">14/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8565"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">15/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8566"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">16/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8567"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr class="btn_tourID_2952">
                <td colspan="3" align="center"><a href="javascript:;" onclick="$('.btn_tourID_2952').hide();$('.tourID_2952').show();">[xem thêm]</a></td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">17/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8568"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">18/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8569"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">19/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8570"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">20/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8571"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">21/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8572"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">22/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8573"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">23/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8574"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">24/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8575"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">25/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8576"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">26/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8577"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">27/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8578"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">28/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8579"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">29/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8580"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">30/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8581"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2952">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">31/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            765.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2952&phongID=8582"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td align="left" valign="top"><p><a href="http://www.dulichthu-dong.com/trong-nuoc/2951/Dailytour-Hue---Dong-Phong-Nha" class="link-level2">
                Dailytour: Hu&#07871; - &#00272;&#07897;ng Phong Nha                      </a></p>
        <p>
            <a href="http://www.dulichthu-dong.com/trong-nuoc/2951/Dailytour-Hue---Dong-Phong-Nha"><img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_135x80_phongnha_03(1)_7779.jpg" width="135" hspace="3" vspace="3" border="0" align="left" /></a>
        <p>
            <img src="http://cdn.dulichhe.com/images/allsite/khoihanhdanang.gif" alt="Khoi hanh" width="161" height="18">                          <br />
            Thời gian:
            1 ng&#00224;y                          <br />
            Phương tiện:
            &#00272;i v&#00224; v&#07873; b&#07857;ng xe                          <br />
            Khởi hành:
            H&#07857;ng ng&#00224;y                          <br />
        </p></td>
    <td align="center" valign="top">                      <table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">13/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8545"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">14/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8546"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">15/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8547"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">16/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8548"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr class="btn_tourID_2951">
                <td colspan="3" align="center"><a href="javascript:;" onclick="$('.btn_tourID_2951').hide();$('.tourID_2951').show();">[xem thêm]</a></td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">17/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8549"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">18/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8550"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">19/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8551"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">20/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8552"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">21/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8553"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">22/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8554"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">23/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8555"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">24/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8556"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">25/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8557"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">26/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8558"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">27/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8559"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">28/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8560"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">29/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8561"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">30/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8562"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2951">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">31/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            665.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2951&phongID=8563"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td align="left" valign="top"><p><a href="http://www.dulichthu-dong.com/trong-nuoc/2950/Dailytour-Hue---KDL-Thanh-Tan" class="link-level2">
                Dailytour: Hu&#07871; - KDL Thanh T&#00226;n                      </a></p>
        <p>
            <a href="http://www.dulichthu-dong.com/trong-nuoc/2950/Dailytour-Hue---KDL-Thanh-Tan"><img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_135x80_suối-nước-nóng-thanh-tân-huế-1_8628.jpg" width="135" hspace="3" vspace="3" border="0" align="left" /></a>
        <p>
            <img src="http://cdn.dulichhe.com/images/allsite/khoihanhdanang.gif" alt="Khoi hanh" width="161" height="18">                          <br />
            Thời gian:
            1 ng&#00224;y                          <br />
            Phương tiện:
            &#00272;i v&#00224; v&#07873; b&#07857;ng xe                          <br />
            Khởi hành:
            H&#07857;ng ng&#00224;y                          <br />
        </p></td>
    <td align="center" valign="top">                      <table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">13/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8526"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">14/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8527"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">15/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8528"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">16/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8529"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr class="btn_tourID_2950">
                <td colspan="3" align="center"><a href="javascript:;" onclick="$('.btn_tourID_2950').hide();$('.tourID_2950').show();">[xem thêm]</a></td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">17/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8530"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">18/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8531"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">19/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8532"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">20/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8533"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">21/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8534"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">22/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8535"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">23/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8536"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">24/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8537"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">25/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8538"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">26/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8539"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">27/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8540"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">28/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8541"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">29/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8542"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">30/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8543"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2950">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">31/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            450.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2950&phongID=8544"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td align="left" valign="top"><p><a href="http://www.dulichthu-dong.com/trong-nuoc/2949/Dailytour-Hue---Bach-Ma" class="link-level2">
                Dailytour: Hu&#07871; - B&#07841;ch M&#00227;                      </a></p>
        <p>
            <a href="http://www.dulichthu-dong.com/trong-nuoc/2949/Dailytour-Hue---Bach-Ma"><img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_135x80_do-quyen-waterfall_1595.jpg" width="135" hspace="3" vspace="3" border="0" align="left" /></a>
        <p>
            <img src="http://cdn.dulichhe.com/images/allsite/khoihanhdanang.gif" alt="Khoi hanh" width="161" height="18">                          <br />
            Thời gian:
            1 ng&#00224;y                          <br />
            Phương tiện:
            &#00272;i v&#00224; v&#07873; b&#07857;ng xe                          <br />
            Khởi hành:
            H&#07857;ng ng&#00224;y                          <br />
        </p></td>
    <td align="center" valign="top">                      <table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">13/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8507"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">14/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8508"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">15/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8509"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr >
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">16/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8510"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr class="btn_tourID_2949">
                <td colspan="3" align="center"><a href="javascript:;" onclick="$('.btn_tourID_2949').hide();$('.tourID_2949').show();">[xem thêm]</a></td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">17/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8511"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">18/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8512"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">19/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8513"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">20/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8514"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">21/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8515"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">22/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8516"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">23/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8517"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">24/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8518"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">25/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8519"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">26/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8520"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">27/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8521"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">28/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8522"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">29/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8523"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">30/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8524"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr style="display: none" class="tourID_2949">
                <td width="30%" align="center" valign="middle" class="ngaykhoihanh">31/10</td>
                <td width="40%" align="center" valign="middle"><span class="giaban">
                            700.000                            </span>
                </td>
                <td width="30%" align="right" valign="middle">                            <a href="thanhtoan1.php?tourID=2949&phongID=8525"><img src="http://cdn.dulichhe.com/images/2014/button-dattour.gif" width="80" height="21" border="0" /></a>
                </td>
            </tr>
            <tr>
                <td align="center" valign="middle" class="ngaykhoihanh">&nbsp;</td>
                <td align="center" valign="middle">&nbsp;</td>
                <td align="right" valign="middle">&nbsp;</td>
            </tr>
        </table>
    </td>
</tr>
</table>
<table align="center">

    <tr> <td><span class="pagenumnolink">««</span> <span class="pagenumnolink">«</span> <img src="http://cdn.dulichhe.com/images/allsite/pag.gif" width=5" height="8" align="absmiddle">  <span class="pagenumstatic"><b>1</b></span> <span class="pagenum"><a href="http://www.dulichthu-dong.com/trongnuoc.php?page=2">2</a></span> <span class="pagenum"><a href="http://www.dulichthu-dong.com/trongnuoc.php?page=3">3</a></span> <span class="pagenum"><a href="http://www.dulichthu-dong.com/trongnuoc.php?page=4">4</a></span> <span class="pagenum"><a href="http://www.dulichthu-dong.com/trongnuoc.php?page=5">5</a></span> <img src="http://cdn.dulichhe.com/images/allsite/pag.gif" width=5" height="8" align="absmiddle"><img src="http://cdn.dulichhe.com/images/spacer.gif" width="1" height="18" align="absmiddle"> <span class="pagenum"><a href="http://www.dulichthu-dong.com/trongnuoc.php?page=2">Trang kế »</a></span>  <span class="pagenum"><a href="http://www.dulichthu-dong.com/trongnuoc.php?page=6">»»</a></span></td>   </tr>

</table>                </div></td>
</tr>
</table></td>
</tr>
</table>
<p>&nbsp;</p></td>
<td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
    <td align="left" valign="top"><img src="http://cdn.dulichhe.com/images/2014/left-trongnuoc.gif" alt="The loai tour trong nuoc" width="239" height="31" /></td>
</tr>
<p>&nbsp;</p>
<tr>
    <td align="left" valign="top"><ul>
            <p>
            </p>
            <li><a href="trongnuoc.php?clear_view=1&groupID=49" class="link-level3">
                    Ch&#00249;m tour M&#00249;a N&#00432;&#07899;c N&#07893;i            </a></li>
            <p>
            </p>
            <li><a href="trongnuoc.php?clear_view=1&groupID=50" class="link-level3">
                    Ch&#00249;m tour m&#00249;a Thu trong n&#00432;&#07899;c            </a></li>
            <p>
            </p>
            <li><a href="trongnuoc.php?clear_view=1&groupID=52" class="link-level3">
                    Ch&#00249;m tour m&#00249;a Thu Ng&#00432;&#07901;i Cao Tu&#07893;i            </a></li>
            <p>
            </p>
            <li><a href="trongnuoc.php?clear_view=1&groupID=57" class="link-level3">
                    Kh&#00225;m ph&#00225; T&#00226;y B&#07855;c theo tuy&#07871;n &#00273;&#00432;&#07901;ng cao t&#07889;c N&#07897;i B&#00224;i - L&#00224;o Cai            </a></li>
            <p>
            </p>
            <li><a href="trongnuoc.php?clear_view=1&groupID=39" class="link-level3">
                    Ch&#00249;m tour Ti&#07871;t ki&#07879;m &#00273;&#00432;&#07901;ng bay            </a></li>
            <p>
            </p>
            <li><a href="trongnuoc.php?clear_view=1&groupID=42" class="link-level3">
                    &#00272;ang b&#00225;n ONLINE            </a></li>
            <p>
            </p>
            <p>&nbsp;</p>
        </ul></td>
</tr>
<tr>
    <td align="left" valign="top" bgcolor="#FFFFCC"><p>
        <p>
        <div style="padding-left:0px;">

            <script>
                function khoihanh(khoihanhtu,action)
                {
                    var url = "ajax/trongnuoc_khoihanh.php";
                    var data_post = 'khoihanhtu=' + khoihanhtu + '&action=' + action;
                    $.ajax({
                        beforeSend: function(){
                            $("#khoihanh_div").fadeTo("fast",0.1);
                        },
                        type: 'GET',
                        dataType: 'html',
                        url : url,
                        data: data_post,
                        success: function(msg){
                            $("#khoihanh_div").html(msg);
                            $("#khoihanh_div").fadeTo("fast",1);

                            url = "ajax/trongnuoc_khoihanh.php";
                            data_post = 'type=origin';
                            $.ajax({
                                beforeSend: function(){
                                    $("#khoihanh_origin_div").fadeTo("fast",0.1);
                                },
                                type: 'GET',
                                dataType: 'html',
                                url : url,
                                data: data_post,
                                success: function(msg){
                                    $("#khoihanh_origin_div").html(msg);
                                    $("#khoihanh_origin_div").fadeTo("fast",1);
                                }
                            });

                            if (action=='add' || action=='remove' || action=='firsttime')
                                showlist();
                        }
                    });
                }

                function diqua(diquatu,action)
                {
                    var url = "ajax/trongnuoc_diqua.php";
                    _gaq.push(['_trackPageview', '/ajax/trongnuoc_diqua.php']);
                    var data_post = 'diquatu=' + diquatu + '&action=' + action;
                    $.ajax({
                        beforeSend: function(){
                            $("#diqua_div").fadeTo("fast",0.1);
                        },
                        type: 'GET',
                        dataType: 'html',
                        url : url,
                        data: data_post,
                        success: function(msg){
                            $("#diqua_div").html(msg);
                            $("#diqua_div").fadeTo("fast",1);

                            url = "ajax/trongnuoc_diqua.php";
                            data_post = 'type=origin';
                            $.ajax({
                                beforeSend: function(){
                                    $("#diqua_origin_div").fadeTo("fast",0.1);
                                },
                                type: 'GET',
                                dataType: 'html',
                                url : url,
                                data: data_post,
                                success: function(msg){
                                    $("#diqua_origin_div").html(msg);
                                    $("#diqua_origin_div").fadeTo("fast",1);
                                }
                            });

                            if (action=='clear' || action=='add' || action=='remove')
                                showlist(0);
                        }
                    });
                }
                function showlist(reloadpage)
                {
                    if (reloadpage==1)
                        document.location = "http://www.dulichthu-dong.com/trongnuoc.php";

                    _gaq.push(['_trackPageview', '/ajax/trongnuoc_list.php']);

                    var url = "ajax/trongnuoc_list.php";
                    var data_post = '';
                    $.ajax({
                        beforeSend: function(){
                            $("#listtour_div").fadeTo("fast",0.1);
                        },
                        type: 'GET',
                        dataType: 'html',
                        url : url,
                        data: data_post,
                        success: function(msg){
                            $("#listtour_div").html(msg);
                            $("#listtour_div").fadeTo("fast",1);
                        }
                    });
                }

            </script>
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                <tr>
                    <td align="left" valign="top"   class="title-trai">Tìm kiếm theo kết quả</td>
                </tr>
                <tr>
                    <td align="left" valign="top">
                        <div id="khoihanh_div">
                        </div>
                        <div id="diqua_div">
                        </div>
                    </td>
                </tr>
            </table>

            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                <tr>
                    <td align="left" valign="top"   class="title-trai">Theo tuyến du lịch</td>
                </tr>
                <tr>
                    <td align="left" valign="top">
                        <div id="diqua_origin_div">
                        </div>
                    </td>
                </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                <tr>
                    <td align="left" valign="top"   class="title-trai">Theo chủ đề - Sự kiện</td>
                </tr>
                <tr>
                    <td align="left" valign="top"><ul>
                            <li><a href="trongnuoc.php?categoryID=95" >
                                    Du l&#07883;ch &#00272;&#00432;&#07901;ng s&#00244;ng Tp.HCM                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=80" >
                                    Du l&#07883;ch Ti&#07871;t ki&#07879;m d&#00224;nh cho Thanh Ni&#00234;n                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=90" >
                                    Du l&#07883;ch Bi&#07875;n &#00273;&#07843;o                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=92" >
                                    Du l&#07883;ch Li&#00234;n tuy&#07871;n, Xuy&#00234;n Vi&#07879;t                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=93" >
                                    Du l&#07883;ch Ti&#07871;t ki&#07879;m                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=96" >
                                    Du l&#07883;ch &#00272;&#00212;NG B&#07854;C - T&#00194;Y B&#07854;C                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=152" >
                                    Du l&#07883;ch m&#00249;a Valentine                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=183" >
                                    Du l&#07883;ch Tr&#00259;ng M&#07853;t                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=184" >
                                    Du l&#07883;ch H&#07887;a xa                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=200" >
                                    Du l&#07883;ch Free & Easy                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=209" >
                                    Du l&#07883;ch Cao c&#07845;p                        </a></li>
                            <li><a href="trongnuoc.php?categoryID=237" >
                                    Du l&#07883;ch cho ng&#00432;&#07901;i cao tu&#07893;i                        </a></li>
                        </ul></td>
                </tr>
            </table>
        </div></p>
        </p>            <a href="http://www.tramdung.vn" target="_blank"></a></td>
</tr>
</table>
<p>
    <a href="lienhe.php" target="_blank"><img src="http://cdn.dulichhe.com/images/2014/banner-tour-rieng.gif" width="235" height="235" alt="Khuyen mai Online"></a></p></td>
</tr>
</table>
</div>



<div id="footer">
    <table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="normal">
        <tr>
            <td align="left" valign="top"><h2>C&aacute;c d&#7883;ch v&#7909; c&#7911;a Saigontourist</h2></td>
            <td width="250" align="left" valign="top" class="tentour"><h2>&#272;&#259;ng k&yacute; nh&#7853;n th&ocirc;ng tin</h2></td>
        </tr>
        <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="normal">
                    <tr>
                        <td align="left" valign="top" class="title-trai">&nbsp;</td>
                        <td align="left" valign="top" class="title-trai">&nbsp;</td>
                        <td align="left" valign="top" nowrap="nowrap" class="title-trai">&nbsp;</td>
                        <td align="left" valign="top" class="title-trai">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="20%" align="left" valign="top" class="title-trai"><strong>D&#7883;ch v&#7909;</strong></td>
                        <td width="20%" align="left" valign="top" class="title-trai"><strong>Th&ocirc;ng tin</strong></td>
                        <td width="25%" align="left" valign="top" nowrap="nowrap" class="title-trai"><strong>Ch&#259;m s&oacute;c Kh&aacute;ch h&agrave;ng</strong></td>
                        <td width="25%" align="left" valign="top" class="title-trai"><strong>Li&ecirc;n h&#7879;</strong></td>
                    </tr>
                    <tr>
                        <td align="left" valign="top">&nbsp;</td>
                        <td align="left" valign="top">&nbsp;</td>
                        <td align="left" valign="top">&nbsp;</td>
                        <td align="left" valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="left" valign="top"><ul>
                                <li><a href="trongnuoc.php" class="link-level4-light">Tour trong n&#432;&#7899;c</a></li>
                                <li><a href="nuocngoai.php" class="link-level4-light">Tour n&#432;&#7899;c ngo&agrave;i</a></li>
                                <li><a href="vemaybay.php" class="link-level4-light">V&eacute; m&aacute;y bay</a></li>
                                <li><a href="thuexe.php" class="link-level4-light">Thu&ecirc; xe</a></li>
                                <li><a href="http://duhoc.saigontourist.net" target="_blank" class="link-level4-light">Du h&#7885;c</a></li>
                            </ul></td>
                        <td align="left" valign="top"><ul>
                                <li><a href="tuyendiem.php" class="link-level4-light">Tuy&#7871;n &#273;i&#7875;m </a></li>
                                <li><a href="tuvan.php" class="link-level4-light">T&#432; v&#7845;n du l&#7883;ch </a></li>
                                <li><a href="tinsaigontourist.php" class="link-level4-light">Tin Saigontourist </a></li>
                                <li><a href="tindulich.php" class="link-level4-light">Tin du l&#7883;ch</a></li>
                            </ul></td>
                        <td align="left" valign="top"><ul>
                                <li><a href="http://thekhachhang.saigontourist.net/" target="_blank" class="link-level4-light">Th&#7867; kh&aacute;ch h&agrave;ng </a></li>
                                <li><a href="http://voucher.saigontourist.net/" target="_blank" class="link-level4-light">Travel Voucher </a></li>
                                <li><a href="http://baohiem.saigontourist.net" target="_blank" class="link-level4-light">B&#7843;o hi&#7875;m Du l&#7883;ch</a></li>
                                <li><a href="ykienkhachhang.php" class="link-level4-light">Ý kiến khách hàng</a></li>
                                <li><a href="thugopy.php" class="link-level4-light">Phi&#7871;u g&oacute;p &yacute;</a></li>
                                <li><a href="http://www.saigontourist.net/tsnt/" target="_blank" class="link-level4-light">Ch&#432;&#417;ng tr&igrave;nh <br>
                                        Th&#7855;p s&aacute;ng Ni&#7873;m Tin</a></li>
                            </ul></td>
                        <td align="left" valign="top"><ul>
                                <li><a href="gioithieu.php" class="link-level4-light">Dulichthu-dong.com</a></li>
                                <li><a href="saigontourist.php" class="link-level4-light">Saigontourist </a></li>
                                <li><a href="lienhe.php" class="link-level4-light">Li&ecirc;n h&#7879; </a></li>
                                <li><a href="quydinhbaove.php" class="link-level4-light">Quy &#273;&#7883;nh b&#7843;o v&#7879; </a></li>
                                <li><a href="dieukhoanchung.php" class="link-level4-light">&#272;i&#7873;u kho&#7843;n chung </a></li>
                                <li><a href="quydinhthanhtoan.php" class="link-level4-light">Quy định thanh toán</a></li>
                                <li><a href="chinhsachgiaonhan.php" class="link-level4-light">Chính sách giao nhận</a></li>
                                <li><a href="chinhsachhuyphat.php" class="link-level4-light">Chính sách hủy phạt</a></li>
                                <li><a href="chinhsachbaomat.php" class="link-level4-light">Chính sách bảo mật</a></li>
                                <li><a href="http://www.saigontourist.net/tuyendung/" class="link-level4-light">Tuy&#7875;n d&#7909;ng</a></li>
                            </ul></td>
                    </tr>
                </table></td>
            <td align="left" valign="top">


                <div id="mc_embed_signup" style="width: 250px;">
                    <form action="http://dulichhe.us2.list-manage1.com/subscribe/post?u=d747f1ef5abf1d12978236838&amp;id=0416ede359" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" style="font: normal 100% Arial, sans-serif;font-size: 10px;">
                        <fieldset style="-moz-border-radius: 4px;border-radius: 4px;-webkit-border-radius: 4px;border: 1px solid #ccc;padding-top: 1.5em;margin: .5em 0;background-color: #ffffff;color: #000;text-align: left;">
                            <div class="mc-field-group" style="margin: 1.3em 5%;clear: both;overflow: hidden;">
                                <label for="mce-EMAIL" style="display: block;margin: .3em 0;line-height: 1em;font-weight: bold;">Email c&#7911;a b&#7841;n </label>
                                <input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL" style="margin-right: 1.5em;padding: .2em .3em;width: 90%;float: left;z-index: 999;" />
                            </div>
                            <div class="mc-field-group" style="margin: 1.3em 5%;clear: both;overflow: hidden;">
                                <label for="mce-FNAME" style="display: block;margin: .3em 0;line-height: 1em;font-weight: bold;">H&#7885; v&agrave; t&ecirc;n </label>
                                <input type="text" value="" name="FNAME" class="required" id="mce-FNAME" style="margin-right: 1.5em;padding: .2em .3em;width: 90%;float: left;z-index: 999;" />
                            </div>
                            <div id="mce-responses" style="float: left;top: -1.4em;padding: 0em .5em 0em .5em;overflow: hidden;width: 90%;margin: 0 5%;clear: both;">
                                <div class="response" id="mce-error-response" style="display: none;margin: 1em 0;padding: 1em .5em .5em 0;font-weight: bold;float: left;top: -1.5em;z-index: 1;width: 80%;background: FBE3E4;color: #D12F19;"></div>
                                <div class="response" id="mce-success-response" style="display: none;margin: 1em 0;padding: 1em .5em .5em 0;font-weight: bold;float: left;top: -1.5em;z-index: 1;width: 80%;background: #E3FBE4;color: #529214;"></div>
                            </div>
                            <div>
                                <input type="submit" value="&#272;&#259;ng k&yacute;" name="subscribe" id="mc-embedded-subscribe" class="normal-form" style="clear: both;width: auto;display: block;margin: 1em 0 1em 5%;" />
                            </div>
                        </fieldset>
                        <a href="#" id="mc_embed_close" class="mc_embed_close" style="display: none;">Close</a>
                    </form>
                </div></td>
        </tr>
    </table>
</div>
<div id="copyright">
    <table width="100%" border="0">
        <tr>
            <td align="center" valign="top"><img src="http://cdn.dulichhe.com/images/2014/thequocte.gif" width="766" height="61"></td>
        </tr>
        <tr>
            <td align="center" valign="top"><table width="1000" border="0" align="center" cellpadding="5" cellspacing="0">
                    <tr>
                        <td align="left" valign="top" bgcolor="#FFFFFF" class="tieuchuan"><p>B&#7843;n quy&#7873;n 2006 - 2014 &copy; C&ocirc;ng ty TNHH M&#7897;t Th&agrave;nh Vi&ecirc;n D&#7883;ch v&#7909; L&#7919; h&agrave;nh Saigontourist.
                                45 L&ecirc; Th&aacute;nh T&ocirc;n, qu&#7853;n 1, TPHCM. &#272;T:&nbsp;<span dir="ltr" tabindex="-1"><span dir="ltr" skypeaction="skype_dropdown" title="Call this phone number in Vietnam with Skype: +84838279279"><span skypeaction="skype_dropdown" title="Skype actions"> </span>(84-8) 38 279 279&nbsp;</span></span>- Fax: (84-8) 38 224 987.&nbsp;<br />
                                S&#7889; &#273;&#259;ng k&yacute; kinh doanh: 0310891532 do S&#7903; k&#7871; ho&#7841;ch v&agrave; &#273;&#7847;u t&#432; TPHCM c&#7845;p ng&agrave;y 01.06.2011. Ng&#432;&#7901;i &#273;&#7841;i di&#7879;n: &ocirc;ng V&otilde; Anh T&agrave;i</p>
                            <p>&reg; Ghi r&otilde; ngu&#7891;n &quot;<strong>dulichthu-dong.com</strong>&quot; khi s&#7917; d&#7909;ng l&#7841;i th&ocirc;ng tin t&#7915; website n&agrave;y.&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>Website <strong>DULICHTHU-DONG.COM</strong> đã <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=5524" target="_blank">được đăng ký</a> với Bộ Công Thương</p></td>
                    </tr>
                    <tr>
                        <td align="left" valign="top" bgcolor="#FFFFFF" class="tieuchuan"><img src="http://cdn.dulichhe.com/images/2014/logo-danhhieu.gif" width="950" height="87"></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" bgcolor="#FFFFFF" class="tieuchuan"><table width="320" border="0" align="center" cellpadding="2" cellspacing="2">
                                <tr>
                                    <td width="500" align="right" valign="middle">Kết nối với Saigontourist</td>
                                    <td width="20" align="center" valign="top"><a href="https://www.facebook.com/saigontourist.sts" target="_blank"><img src="http://cdn.dulichhe.com/images/2014/social-fa.gif" alt="Saigontourist" width="50" height="50"></a></td>
                                    <td width="20" align="center" valign="top"><a href="https://plus.google.com/u/0/117807970099683633362/posts" target="_blank"><img src="http://cdn.dulichhe.com/images/2014/social-google-plus3.gif" alt="Google+ Saigontourist" width="50" height="50"></a></td>
                                    <td width="20" align="center" valign="top"><a href="http://www.twitter.com/luhanhsts/" target="_blank"><img src="http://cdn.dulichhe.com/images/2014/social-twitter.gif" alt="Twitter Saigontourist" width="50" height="50"></a></td>
                                    <td width="20" align="center" valign="top"><a href="https://www.youtube.com/channel/UCv1hv7IMijIGwxgGeb8sTRg" target="_blank"><img src="http://cdn.dulichhe.com/images/2014/social-youtube.gif" width="50" height="50" alt="Youtube"></a></td>
                                </tr>
                            </table></td>
                    </tr>
                </table></td>
        </tr>
    </table>
</div>
</div>

<div id="toPopup">
    <div class="close"></div>
    <span class="ecs_tooltip">Bấm Esc để đóng lại<span class="arrow"></span></span>
    <div id="popup_content">
        <table width="800" border="0" align="center">
            <tr>
                <td background="images/2014/bg-hotline.gif"><table width="100%" border="0" cellspacing="5">
                        <tr>
                            <td align="left" valign="top"><img src="http://cdn.dulichhe.com/images/spacer.gif" width="70" height="100"></td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top"><strong>TP.HCM</strong></td>
                            <td align="left" valign="top"><strong>Du lịch  nước ngoài</strong></td>
                            <td align="left" valign="top">0916 466 268</td>
                            <td align="left" valign="top">Yahoo: <a href = 'ymsgr:sendim?sophie20237'><img src="http://opi.yahoo.com/online?u=sophie20237&amp;m=g&amp;t=1" alt="Tư vấn tour nước ngoài" border="0" /></a> - Skype:<a href="skype:sophie20237?chat"><img src="http://cdn.dev.skype.com/uri/chatbutton_16px.png" width="45" height="16" border="0" align="absmiddle" /></a></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top"><strong>Du lịch trong nước</strong></td>
                            <td align="left" valign="top" nowrap>(84.8) 38245161 – 38336442<br>
                                0919511279 – 0912984279</td>
                            <td align="left" valign="top">Yahoo: <a href = 'ymsgr:sendim?dulichnoidiasts'><img src="http://opi.yahoo.com/online?u=dulichnoidiasts&amp;m=g&amp;t=1" alt="Tư vấn trong nước" border="0" /></a> -Skype: <a href="skype:thuvan_sgt?chat"><img src="http://cdn.dev.skype.com/uri/chatbutton_16px.png" width="45" height="16" border="0" align="absmiddle" /></a><br>
                                Yahoo: <a href = 'ymsgr:sendim?dlnd_sts'><img src="http://opi.yahoo.com/online?u=dlnd_sts&amp;m=g&amp;t=1" alt="Tư vấn tour trong nước" border="0" /></a></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top"><strong>Hà Nội</strong></td>
                            <td align="left" valign="top"><strong>Du lịch  nước ngoài</strong></td>
                            <td align="left" valign="top">0905 527 066</td>
                            <td align="left" valign="top">Yahoo: <a href = 'ymsgr:sendim?kimhoasth'><img src="http://opi.yahoo.com/online?u=kimhoasth&amp;m=g&amp;t=1" alt="Tư vấn tour  nước ngoài" border="0" /></a> - Skype: <a href="skype:kimhoa-sth?chat"><img src="http://cdn.dev.skype.com/uri/chatbutton_16px.png" width="45" height="16" border="0" align="absmiddle" /></a></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top"><strong>Du lịch trong nước</strong></td>
                            <td align="left" valign="top">0904 814 066</td>
                            <td align="left" valign="top">Yahoo: <a href = 'ymsgr:sendim?haiyensthnd'><img src="http://opi.yahoo.com/online?u=haiyensthnd&amp;m=g&amp;t=1" alt="Tư vấn tour trong nước" border="0" /></a> - Skype :<a href="skype:haiyen.sth?chat"><img src="http://cdn.dev.skype.com/uri/chatbutton_16px.png" width="45" height="16" border="0" align="absmiddle" /></a></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top"><strong>Đà Nẵng</strong></td>
                            <td align="left" valign="top"><strong>Du lịch  nước ngoài</strong></td>
                            <td align="left" valign="top">0905 153 993</td>
                            <td align="left" valign="top">Yahoo: <a href = 'ymsgr:sendim?tamnghia_sgt'><img src="http://opi.yahoo.com/online?u=tamnghia_sgt&amp;m=g&amp;t=1" alt="Tư vấn tour nước ngoài" border="0" /></a> - Skype: <a href="skype:tamnghia_std?chat"><img src="http://cdn.dev.skype.com/uri/chatbutton_16px.png" width="45" height="16" border="0" align="absmiddle" /></a></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top">&nbsp;</td>

                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top"><strong>Du lịch trong nước</strong></td>
                            <td align="left" valign="top">0905 153 993</td>
                            <td align="left" valign="top">Yahoo: <a href = 'ymsgr:sendim?tamnghia_sgt'><img src="http://opi.yahoo.com/online?u=tamnghia_sgt&amp;m=g&amp;t=1" alt="Tư vấn tour trong nước" border="0" /></a> - Skype: <a href="skype:tamnghia_std?chat"><img src="http://cdn.dev.skype.com/uri/chatbutton_16px.png" width="45" height="16" border="0" align="absmiddle" /></a></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                        </tr>
                    </table></td>
            </tr>
        </table>
    </div>
</div>


<div class="loader"></div>
<div id="backgroundPopup"></div>

</body>
</html>
