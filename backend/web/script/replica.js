/**
 * Created by again on 4/27/15.
 */
$(document).ready(function () {

    function hide() {
        $('.click').on('click', function () {
            alert($(this).parent('tr').index());
        });
    };

    hide();
});