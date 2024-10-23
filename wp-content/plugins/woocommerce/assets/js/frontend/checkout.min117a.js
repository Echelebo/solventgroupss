jQuery(function(e){if("undefined"==typeof wc_checkout_params)return!1;e.blockUI.defaults.overlayCSS.cursor="default";var o={updateTimer:!1,dirtyInput:!1,selectedPaymentMethod:!1,xhr:!1,$order_review:e("#order_review"),$checkout_form:e("form.checkout"),init:function(){e(document.body).on("update_checkout",this.update_checkout),e(document.body).on("init_checkout",this.init_checkout),this.$checkout_form.on("click",'input[name="payment_method"]',this.payment_method_selected),e(document.body).hasClass("woocommerce-order-pay")&&(this.$order_review.on("click",'input[name="payment_method"]',this.payment_method_selected),this.$order_review.on("submit",this.submitOrder),this.$order_review.attr("novalidate","novalidate")),this.$checkout_form.attr("novalidate","novalidate"),this.$checkout_form.on("submit",this.submit),this.$checkout_form.on("input validate change",".input-text, select, input:checkbox",this.validate_field),this.$checkout_form.on("update",this.trigger_update_checkout),this.$checkout_form.on("change",'select.shipping_method, input[name^="shipping_method"], #ship-to-different-address input, .update_totals_on_change select, .update_totals_on_change input[type="radio"], .update_totals_on_change input[type="checkbox"]',this.trigger_update_checkout),this.$checkout_form.on("change",".address-field select",this.input_changed),this.$checkout_form.on("change",".address-field input.input-text, .update_totals_on_change input.input-text",this.maybe_input_changed),this.$checkout_form.on("keydown",".address-field input.input-text, .update_totals_on_change input.input-text",this.queue_update_checkout),this.$checkout_form.on("change","#ship-to-different-address input",this.ship_to_different_address),this.$checkout_form.find("#ship-to-different-address input").trigger("change"),this.init_payment_methods(),"1"===wc_checkout_params.is_checkout&&e(document.body).trigger("init_checkout"),"yes"===wc_checkout_params.option_guest_checkout&&e("input#createaccount").on("change",this.toggle_create_account).trigger("change")},init_payment_methods:function(){var t=e(".woocommerce-checkout").find('input[name="payment_method"]');1===t.length&&t.eq(0).hide(),o.selectedPaymentMethod&&e("#"+o.selectedPaymentMethod).prop("checked",!0),0===t.filter(":checked").length&&t.eq(0).prop("checked",!0);var c=t.filter(":checked").eq(0).prop("id");t.length>1&&e('div.payment_box:not(".'+c+'")').filter(":visible").slideUp(0),t.filter(":checked").eq(0).trigger("click")},get_payment_method:function(){return o.$checkout_form.find('input[name="payment_method"]:checked').val()},payment_method_selected:function(t){if(t.stopPropagation(),e(".payment_methods input.input-radio").length>1){var c=e("div.payment_box."+e(this).attr("ID")),i=e(this).is(":checked");i&&!c.is(":visible")&&(e("div.payment_box").filter(":visible").slideUp(230),i&&c.slideDown(230))}else e("div.payment_box").show();e(this).data("order_button_text")?e("#place_order").text(e(this).data("order_button_text")):e("#place_order").text(e("#place_order").data("value"));var n=e('.woocommerce-checkout input[name="payment_method"]:checked').attr("id");n!==o.selectedPaymentMethod&&e(document.body).trigger("payment_method_selected"),o.selectedPaymentMethod=n},toggle_create_account:function(){e("div.create-account").hide(),e(this).is(":checked")&&(e("#account_password").val("").trigger("change"),e("div.create-account").slideDown())},init_checkout:function(){e(document.body).trigger("update_checkout")},maybe_input_changed:function(e){o.dirtyInput&&o.input_changed(e)},input_changed:function(e){o.dirtyInput=e.target,o.maybe_update_checkout()},queue_update_checkout:function(e){if(9===(e.keyCode||e.which||0))return!0;o.dirtyInput=this,o.reset_update_checkout_timer(),o.updateTimer=setTimeout(o.maybe_update_checkout,"1000")},trigger_update_checkout:function(){o.reset_update_checkout_timer(),o.dirtyInput=!1,e(document.body).trigger("update_checkout")},maybe_update_checkout:function(){var t=!0;if(e(o.dirtyInput).length){var c=e(o.dirtyInput).closest("div").find(".address-field.validate-required");c.length&&c.each(function(){""===e(this).find("input.input-text").val()&&(t=!1)})}t&&o.trigger_update_checkout()},ship_to_different_address:function(){e("div.shipping_address").hide(),e(this).is(":checked")&&e("div.shipping_address").slideDown()},reset_update_checkout_timer:function(){clearTimeout(o.updateTimer)},is_valid_json:function(e){try{var o=JSON.parse(e);return o&&"object"==typeof o}catch(t){return!1}},validate_field:function(o){var t=e(this),c=t.closest(".form-row"),i=!0,n=c.is(".validate-required"),r=c.is(".validate-email"),a=c.is(".validate-phone"),d="",u=o.type;"input"===u&&c.removeClass("woocommerce-invalid woocommerce-invalid-required-field woocommerce-invalid-email woocommerce-invalid-phone woocommerce-validated"),"validate"!==u&&"change"!==u||(n&&("checkbox"!==t.attr("type")||t.is(":checked")?""===t.val()&&(c.removeClass("woocommerce-validated").addClass("woocommerce-invalid woocommerce-invalid-required-field"),i=!1):(c.removeClass("woocommerce-validated").addClass("woocommerce-invalid woocommerce-invalid-required-field"),i=!1)),r&&t.val()&&((d=new RegExp(/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[0-9a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i)).test(t.val())||(c.removeClass("woocommerce-validated").addClass("woocommerce-invalid woocommerce-invalid-email woocommerce-invalid-phone"),i=!1)),a&&(d=new RegExp(/[\s\#0-9_\-\+\/\(\)\.]/g),0<t.val().replace(d,"").length&&(c.removeClass("woocommerce-validated").addClass("woocommerce-invalid woocommerce-invalid-phone"),i=!1)),i&&c.removeClass("woocommerce-invalid woocommerce-invalid-required-field woocommerce-invalid-email woocommerce-invalid-phone").addClass("woocommerce-validated"))},update_checkout:function(e,t){o.reset_update_checkout_timer(),o.updateTimer=setTimeout(o.update_checkout_action,"5",t)},update_checkout_action:function(t){if(o.xhr&&o.xhr.abort(),0!==e("form.checkout").length){t=void 0!==t?t:{update_shipping_method:!0};var c=e("#billing_country").val(),i=e("#billing_state").val(),n=e(":input#billing_postcode").val(),r=e("#billing_city").val(),a=e(":input#billing_address_1").val(),d=e(":input#billing_address_2").val(),u=c,s=i,m=n,l=r,h=a,p=d,_=e(o.$checkout_form).find(".address-field.validate-required:visible"),g=!0;_.length&&_.each(function(){""===e(this).find(":input").val()&&(g=!1)}),e("#ship-to-different-address").find("input").is(":checked")&&(u=e("#shipping_country").val(),s=e("#shipping_state").val(),m=e(":input#shipping_postcode").val(),l=e("#shipping_city").val(),h=e(":input#shipping_address_1").val(),p=e(":input#shipping_address_2").val());var f={security:wc_checkout_params.update_order_review_nonce,payment_method:o.get_payment_method(),country:c,state:i,postcode:n,city:r,address:a,address_2:d,s_country:u,s_state:s,s_postcode:m,s_city:l,s_address:h,s_address_2:p,has_full_address:g,post_data:e("form.checkout").serialize()};if(!1!==t.update_shipping_method){var v={};e('select.shipping_method, input[name^="shipping_method"][type="radio"]:checked, input[name^="shipping_method"][type="hidden"]').each(function(){v[e(this).data("index")]=e(this).val()}),f.shipping_method=v}e(".woocommerce-checkout-payment, .woocommerce-checkout-review-order-table").block({message:null,overlayCSS:{background:"#fff",opacity:.6}}),o.xhr=e.ajax({type:"POST",url:wc_checkout_params.wc_ajax_url.toString().replace("%%endpoint%%","update_order_review"),data:f,success:function(t){if(t&&!0===t.reload)window.location.reload();else{e(".woocommerce-NoticeGroup-updateOrderReview").remove();var c=e("#terms").prop("checked"),i={};if(e(".payment_box :input").each(function(){var o=e(this).attr("id");o&&(-1!==e.inArray(e(this).attr("type"),["checkbox","radio"])?i[o]=e(this).prop("checked"):i[o]=e(this).val())}),t&&t.fragments&&(e.each(t.fragments,function(t,c){o.fragments&&o.fragments[t]===c||e(t).replaceWith(c),e(t).unblock()}),o.fragments=t.fragments),c&&e("#terms").prop("checked",!0),e.isEmptyObject(i)||e(".payment_box :input").each(function(){var o=e(this).attr("id");o&&(-1!==e.inArray(e(this).attr("type"),["checkbox","radio"])?e(this).prop("checked",i[o]).trigger("change"):-1!==e.inArray(e(this).attr("type"),["select"])?e(this).val(i[o]).trigger("change"):null!==e(this).val()&&0===e(this).val().length&&e(this).val(i[o]).trigger("change"))}),t&&"failure"===t.result){var n=e("form.checkout");e(".woocommerce-error, .woocommerce-message, .is-error, .is-success").remove(),t.messages?n.prepend('<div class="woocommerce-NoticeGroup woocommerce-NoticeGroup-updateOrderReview">'+t.messages+"</div>"):n.prepend(t),n.find(".input-text, select, input:checkbox").trigger("validate").trigger("blur"),o.scroll_to_notices()}o.init_payment_methods(),e(document.body).trigger("updated_checkout",[t])}}})}},handleUnloadEvent:function(e){return-1===navigator.userAgent.indexOf("MSIE")&&!document.documentMode||(e.preventDefault(),undefined)},attachUnloadEventsOnSubmit:function(){e(window).on("beforeunload",this.handleUnloadEvent)},detachUnloadEventsOnSubmit:function(){e(window).off("beforeunload",this.handleUnloadEvent)},blockOnSubmit:function(e){1!==e.data("blockUI.isBlocked")&&e.block({message:null,overlayCSS:{background:"#fff",opacity:.6}})},submitOrder:function(){o.blockOnSubmit(e(this))},submit:function(){o.reset_update_checkout_timer();var t=e(this);return!t.is(".processing")&&(!1!==t.triggerHandler("checkout_place_order",[o])&&!1!==t.triggerHandler("checkout_place_order_"+o.get_payment_method(),[o])&&(t.addClass("processing"),o.blockOnSubmit(t),o.attachUnloadEventsOnSubmit(),e.ajaxSetup({dataFilter:function(e,t){if("json"!==t)return e;if(o.is_valid_json(e))return e;var c=e.match(/{"result.*}/);return null===c?console.log("Unable to fix malformed JSON"):o.is_valid_json(c[0])?(console.log("Fixed malformed JSON. Original:"),console.log(e),e=c[0]):console.log("Unable to fix malformed JSON"),e}}),e.ajax({type:"POST",url:wc_checkout_params.checkout_url,data:t.serialize(),dataType:"json",success:function(c){o.detachUnloadEventsOnSubmit();try{if("success"!==c.result||!1===t.triggerHandler("checkout_place_order_success",[c,o]))throw"failure"===c.result?"Result failure":"Invalid response";-1===c.redirect.indexOf("https://")||-1===c.redirect.indexOf("http://")?window.location=c.redirect:window.location=decodeURI(c.redirect)}catch(i){if(!0===c.reload)return void window.location.reload();!0===c.refresh&&e(document.body).trigger("update_checkout"),c.messages?o.submit_error(c.messages):o.submit_error('<div class="woocommerce-error">'+wc_checkout_params.i18n_checkout_error+"</div>")}},error:function(e,t,c){o.detachUnloadEventsOnSubmit(),o.submit_error('<div class="woocommerce-error">'+(c||wc_checkout_params.i18n_checkout_error)+"</div>")}})),!1)},submit_error:function(t){e(".woocommerce-NoticeGroup-checkout, .woocommerce-error, .woocommerce-message, .is-error, .is-success").remove(),o.$checkout_form.prepend('<div class="woocommerce-NoticeGroup woocommerce-NoticeGroup-checkout">'+t+"</div>"),o.$checkout_form.removeClass("processing").unblock(),o.$checkout_form.find(".input-text, select, input:checkbox").trigger("validate").trigger("blur"),o.scroll_to_notices(),e(document.body).trigger("checkout_error",[t])},scroll_to_notices:function(){var o=e(".woocommerce-NoticeGroup-updateOrderReview, .woocommerce-NoticeGroup-checkout");o.length||(o=e("form.checkout")),e.scroll_to_notices(o)}},t={init:function(){e(document.body).on("click","a.showcoupon",this.show_coupon_form),e(document.body).on("click",".woocommerce-remove-coupon",this.remove_coupon),e("form.checkout_coupon").hide().on("submit",this.submit)},show_coupon_form:function(){return e(".checkout_coupon").slideToggle(400,function(){e(".checkout_coupon").find(":input:eq(0)").trigger("focus")}),!1},submit:function(){var o=e(this);if(o.is(".processing"))return!1;o.addClass("processing").block({message:null,overlayCSS:{background:"#fff",opacity:.6}});var t={security:wc_checkout_params.apply_coupon_nonce,coupon_code:o.find('input[name="coupon_code"]').val()};return e.ajax({type:"POST",url:wc_checkout_params.wc_ajax_url.toString().replace("%%endpoint%%","apply_coupon"),data:t,success:function(c){e(".woocommerce-error, .woocommerce-message, .is-error, .is-success").remove(),o.removeClass("processing").unblock(),c&&(o.before(c),o.slideUp(),e(document.body).trigger("applied_coupon_in_checkout",[t.coupon_code]),e(document.body).trigger("update_checkout",{update_shipping_method:!1}))},dataType:"html"}),!1},remove_coupon:function(o){o.preventDefault();var t=e(this).parents(".woocommerce-checkout-review-order"),c=e(this).data("coupon");t.addClass("processing").block({message:null,overlayCSS:{background:"#fff",opacity:.6}});var i={security:wc_checkout_params.remove_coupon_nonce,coupon:c};e.ajax({type:"POST",url:wc_checkout_params.wc_ajax_url.toString().replace("%%endpoint%%","remove_coupon"),data:i,success:function(o){e(".woocommerce-error, .woocommerce-message, .is-error, .is-success").remove(),t.removeClass("processing").unblock(),o&&(e("form.woocommerce-checkout").before(o),e(document.body).trigger("removed_coupon_in_checkout",[i.coupon]),e(document.body).trigger("update_checkout",{update_shipping_method:!1}),e("form.checkout_coupon").find('input[name="coupon_code"]').val(""))},error:function(e){wc_checkout_params.debug_mode&&console.log(e.responseText)},dataType:"html"})}},c={init:function(){e(document.body).on("click","a.showlogin",this.show_login_form)},show_login_form:function(){return e("form.login, form.woocommerce-form--login").slideToggle(),!1}},i={init:function(){e(document.body).on("click","a.woocommerce-terms-and-conditions-link",this.toggle_terms)},toggle_terms:function(){if(e(".woocommerce-terms-and-conditions").length)return e(".woocommerce-terms-and-conditions").slideToggle(function(){var o=e(".woocommerce-terms-and-conditions-link");e(".woocommerce-terms-and-conditions").is(":visible")?(o.addClass("woocommerce-terms-and-conditions-link--open"),o.removeClass("woocommerce-terms-and-conditions-link--closed")):(o.removeClass("woocommerce-terms-and-conditions-link--open"),o.addClass("woocommerce-terms-and-conditions-link--closed"))}),!1}};o.init(),t.init(),c.init(),i.init()});