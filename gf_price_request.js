(function ($) {
    Drupal.behaviors.gfPriceRequest = {
        attach: function (context, settings) {
            var priceForm = $('form.gf_price_request_form');
            var priceBox = $('.price-box', priceForm);
            var currentPercent = 0;
            var currentPrice = priceBox.text();
            $('.gf-price-request', priceForm).click(function() {
                var percentBox = $(this).prevAll('.current-percent:first');
                var submitButton = $(this).siblings('.submit-button-box')
                    .find('input.new-price-submit-button');
                percentBox.show();
                submitButton.removeClass('d-none');
                submitButton.show();

                if ($(this).hasClass('plus')){
                    currentPercent += 1;
                } else if ($(this).hasClass('minus')) {
                    currentPercent -= 1;
                }
                if (currentPercent > 0) {
                    percentBox.removeClass('minus').addClass('plus');
                } else if (currentPercent === 0) {
                    percentBox.hide();
                    submitButton.hide();
                } else {
                    percentBox.removeClass('plus').addClass('minus');
                }

                var newPrice = +currentPrice + (currentPrice * (currentPercent / 100));
                newPrice = Math.round(newPrice)

                percentBox.html(currentPercent + '%');
                priceBox.text(newPrice);
                $('input[name="gf_price_request_new_price"]', priceForm).val(newPrice);
                $('input[name="gf_price_request_percent"]', priceForm).val(currentPercent);
            });
        }
    };
})(jQuery);

