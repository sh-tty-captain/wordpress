jQuery(document).ready(function($){
    //Переменные
    var step = 1,
      total = 0,
      n1 = 0,
      n2 = 0,
      n3 = 0,
      n4 = 0,
      procent = 0,
      arr = [];


    //По клику "Далее"
    $('.next-step').on('click', function(event){
        event.preventDefault();

        var parentStep = $(this).parents('.step');
        if($(parentStep).find('input:checked').length >= 1) {
            if(parentStep.hasClass('step-1')){
                var data1 = document.querySelector("input.step_1:checked").value;

                document.getElementById('result_step__1').innerHTML = data1;

                $(this).hide();
                $(this).parents('.step').find('.overlay').animate({
                    opacity : 'show'
                });

                $(parentStep).next('.step').animate({
                    opacity: "show",
                    scrollTop: "50px"
                }, 800);

                $('#progress-inner').addClass('white');
                progressPlus();
                stepPlus();

                var chbox;
                chbox = document.getElementById('check1');

                if (chbox.checked) {
                    document.getElementById("inner_old").remove();
                    document.getElementById("inner__type_old").remove();
                    document.getElementById("full").remove();
                    document.getElementById("parts").remove();
                }
                else {
                    document.getElementById("inner_new").remove();
                    document.getElementById("inner__type_new").remove();
                    document.getElementById("building").remove();
                }

                $('html, body').animate({
                    scrollTop: $('#step2').offset().top - 220
                }, 800);
            }

            else if(parentStep.hasClass('step-2')){
                var data2 = document.querySelector("input.step_2:checked").value;

                document.getElementById('result_step__2').innerHTML = data2;

                $(this).hide();

                $(this).parents('.step').find('.overlay').animate({
                    opacity : 'show'
                });

                $(parentStep).next('.step').animate({
                    opacity: "show",
                    top: '0'
                }, 800);

                progressPlus();
                stepPlus();

                $('html, body').animate({
                    scrollTop: $('#step3').offset().top - 200
                }, 800);

                var chbox2;
                chbox2 = document.getElementById('check8');

                if (chbox2.checked) {
                    document.getElementById("parts").remove();
                }
                else {
                    document.getElementById("full").remove();
                }
            }

            else if(parentStep.hasClass('step-3')) {
                if ($('#new_building').val() !== '' && $('#new_building').val() !== '0') {
                    $(this).hide();

                    $(this).parents('.step').find('.overlay').animate({
                        opacity: 'show'
                    });

                    $(parentStep).next('.step').animate({
                        opacity: "show",
                        top: '0'
                    }, 800);

                    progressPlus();
                    stepPlus();

                    $('html, body').animate({
                        scrollTop: $('#step4').offset().top - 180
                    }, 800);

                    if($('.step-inner__3').hasClass('old_remont')) {
                        var data13 = document.querySelector("input.step_3").value;
                        var data14 = document.querySelector("input.step_3_metr").value;
                        var data15 = document.querySelector("input.step_3_demounting").value;

                        if($('input.step_3_demounting').is(":checked")){
                            document.getElementById('result_step__3').innerHTML = data13 + ', ' + data15;
                            document.getElementById('result_step__3_metr').innerHTML = '«' + data14 + '»';
                        } else {
                            document.getElementById('result_step__3').innerHTML = '«' + data13 + '»';
                            document.getElementById('result_step__3_metr').innerHTML = '«' + data14 + '»';
                        }
                    } else if($('.step-inner__3').hasClass('step-inner__building')) {
                        var data9 = document.querySelector("input.step_3_metr").value;
                        document.getElementById('result_step__3_metr').innerHTML = '«' + data9 + '»';
                    }
                } else {
                    $('#new_building').css('border', '2px solid #FC6F21');
                    alert('Укажите площадь помещения.');
                }
            }

            else if(parentStep.hasClass('step-4')){
                var data12 = document.querySelector("input.step_4:checked").value;

                document.getElementById('result_step__4').innerHTML = data12;

                $(this).hide();

                $(this).parents('.step').find('.overlay').animate({
                    opacity : 'show'
                });

                $('html, body').animate({
                    scrollTop: $('#done').offset().top - 200
                }, 800);

                $('#progress-bar, #progress-step').addClass('full');

                progressPlus();
                stepPlus();

                $('#progress-step > p').hide(50);
                $('#result').show(400);

                //Расчет стоимости
                var count = 0;

                event.preventDefault();
                $(this).animate({'opacity' : '0'})
                $('.active-item').each(function() {
                    var costTxt = $(this).find('.check').find('.price').text();
                    var cost = $(this).find('.check').find('.cost').text();
                    var txt = $(this).find('.title a').text();
                    var itemOrder = txt + '<span>' + '&nbsp;' + costTxt +'</span>';
                    var parent = $(this).parents('.step');

                    if(parent.hasClass('step-1')){
                        itemOrder  = '<span class="total__item">Фонд:</span> ' + itemOrder;
                        n1 = 0;
                    }

                    if(parent.hasClass('step-2')){
                        var numD = $('#new_building').val();

                        itemOrder  = '<span class="total__item">Где:</span> ' + itemOrder + '(' + numD + 'м<sup>2</sup>)';
                        n2 = 0;
                    }

                    if(parent.hasClass('step-3')){
                        itemOrder  = '<span class="total__item"></span> ' + itemOrder;
                        n3 += parseFloat(cost);
                    }

                    if(parent.hasClass('step-4')){
                        var numB = $('#new_building').val();

                        itemOrder  = '<span class="total__item">Тип ремонта:</span> ' + itemOrder;
                        n4 = cost * parseFloat(numB);
                    }

                    arr.push(itemOrder);

                    total = n1 + n2 + n3 + n4;
                });
                var cacheArr;
                for(var i = 0, cacheArr = arr.length;i <cacheArr; i++){
                    $('.total__result').append('<p>' + arr[i] + '</p>');
                }
                $('.total__result').append('<h2>' + 'Итого: ' + '</h2>' +  '<p class="price_total"><span' +
                  ' class="price_total__color">' +  total + '</span>' + '<span>' + ' руб.' + '</span>' + '*' + '</p>');
                var height=$("body").height();
                $("body").animate({"scrollTop":height},"slow");
                $('#result').slideDown(10);
            }
        }
        else{
            if(parentStep.hasClass('step-1')){
                alert('Выберите вариант жилья.');
            }
            else if(parentStep.hasClass('step-2')){
                alert('Уточните, где хотите сделать ремонт.');
            }
            else if(parentStep.hasClass('step-3')){
                alert('Укажите площадь помещения.');
            }
            else if(parentStep.hasClass('step-4')){
                alert('Выберите, какой ремонт вы хотите сделать.');
            }
        }
    });

    //Оформить заявку
    $('#button-order').on('click', function(event){
        event.preventDefault();

        $('#form-wrap').animate({
            opacity: "show",
            left: '4%'
        }, 800);

        $('html, body').animate({
            scrollTop: $('#form').offset().top - 0
        }, 800);

        $(this).addClass('disabled');
    });

    //Возможность выбрать только один из чеков для блоков .step-1, .step-2 и .step-4
    $('.step-1 input[type="checkbox"],.step-2 input[type="checkbox"],.step-4 input[type="checkbox"]')
      .on('click', function(){
          if($(this).prop('checked')){
              $(this).parents('.step').find('input[type="checkbox"]')
                .attr('disabled', 'disabled');
              $(this).parents('.step').find('label').addClass('disabled-check');
              $(this).next('label').removeClass('disabled-check');
              $(this).removeAttr('disabled');

          }
          else{
              $(this).parents('.step').find('input[type="checkbox"]')
                .removeAttr('disabled');
              $(this).parents('.step').find('label').removeClass('disabled-check');
          }
      });

    $("input[type='checkbox']").change(function(){
        if($(this).is(":checked")){
            $(this).next("label").addClass("active-check");
        }else{
            $(this).next("label").removeClass("active-check");
        }
    });

    $('.rooms input[type="checkbox"]')
      .on('click', function(){
          if($(this).prop('checked')){
              $(this).parents('.rooms').find('input[type="checkbox"]')
                .attr('disabled', 'disabled');
              $(this).parents('.rooms').find('label').addClass('disabled-check');
              $(this).next('label').removeClass('disabled-check');
              $(this).removeAttr('disabled');

          }
          else{
              $(this).parents('.rooms').find('input[type="checkbox"]')
                .removeAttr('disabled');
              $(this).parents('.rooms').find('label').removeClass('disabled-check');
          }
      });


    //Выделение активного чека
    $('input[type="checkbox"]').change(function(){
        if($(this).prop('checked')){
            $(this).parents('.item-type').addClass('active-item');
        }
        else{
            $(this).parents('.item-type').removeClass('active-item');
        }
    });


    //Только цифры для кол-ва страниц
    $('#new_building').bind("change keyup input click", function() {
        if(this.value.match(/[^0-9]/g)){
            this.value = this.value.replace(/[^0-9]/g, '')
        }
    });


    //Скрытое описание
    $('.hide-desc').hide();
    $('.title a').on('click', function(event){
        event.preventDefault();
        $(this).next('.hide-desc').toggle(250);
    });


    //Затемнение
    $(window).bind("resize", function(){
        $("#overlay").css("height", $(document).height());

    });


    //Релоад
    $('.reload').on('click', function(event){
        event.preventDefault();
        location.reload();
    });


    //Вызываемые функции
    function stepPlus(){
        step++;
        $('#progress-step > p > span:first').text(step);
    }
    function progressPlus(){
        $('#progress-inner').animate({width : '+=25.1%'});
        procent +=25;
        var p100 = 'Выполнено'
        $('#progress-inner').text(procent + '%');
        if($('#progress-inner').text() == '100%') $('#progress-inner').text(p100)
    }
});