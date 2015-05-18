$(document).ready(function () {

    function cell() {
        var MyTable = document.getElementById('mytable');
        value = [];
        var rows = MyTable.getElementsByTagName('tr');
        for (var i = 0; i < rows.length; i++) {
            var row = rows[i].getElementsByTagName('td');
            for (var j = 0; j < row.length; j++) {
                row[j].onmouseover = function (e) {
                    this.style.backgroundColor = '#ff0000';
                    value.push([$(this).parent('tr').index(), $(this).index()]);
                };
            }
        }
    }

    $(function () {
        $('.click-table td').on('click', function () {
            alert($(this).parent('tr').index());
        });
    });

    function getValue() {
        $(".btn").click(function () {
            document.getElementById('user-password_reset_token').value = value;
            /*$.post('http://my.dev/user/graphic?id=2', {email: value.toString()}, function () {
                alert(value);
            });*/
        });

    }

    cell();
    getValue();
});