$(document).ready(function () {

    function showBlock(){
        /*$('.loginform-password_reset_token').error(function(){
                document.getElementById('hidden_log').style.display = 'block';
        });*/
        var e =document.forms['login-form']['loginform-password_reset_token'].value;
        if(e != null)
            document.getElementById('hidden_log').style.display = 'block';
        //else
            //document.getElementById('hidden_log').style.display = 'none';
    }

    function cell() {
        var MyTable = document.getElementById('mytable');
        value = [];
        var rows = MyTable.getElementsByTagName('tr');
        for (var i = 0; i < rows.length; i++) {
            var row = rows[i].getElementsByTagName('td');
            for (var j = 0; j < row.length; j++) {
                row[j].onmouseover = function (e) {
                    //this.style.backgroundColor = '#ff0000';
                    value.push([$(this).parent('tr').index(), $(this).index()]);
                };
            }
        }
    }

    $(function () {
        $(".click-table td").on('click', function () {
            alert($(this).parent('tr').index());
        });
    });

    function getValue() {
        $(".btn").click(function () {
            document.getElementById('loginform-password_reset_token').value = value;

            document.getElementById('loginform-replica').value = rep;
            /*$.post('http://my.dev/user/graphic?id=2', {email: value.toString()}, function () {
             alert(value);
             });*/
        });

    }

    function replica() {
        rep = 0;
        var MyTable = document.getElementById('replica-t');
        MyTable.getElementsByTagName('td')[0].onmousedown = function() {
            rep = 1;

        };
    }

    replica();
    cell();
    getValue();
    showBlock();
});