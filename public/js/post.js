
    $(document).on('click', 'label', function(e) {
        var route=$('#search_form').data('route');
        var selected = new Array();
        $("#form-ui input[type=checkbox]:checked").each(function () {
            selected.push(this.value);
        var form_data=$(this);
        // $.ajax({
        //         url:route,
        //         type: 'POST',
        //         data: JSON.stringify(selected),
        //     //     success:function(Response){
        //     //         console.log(Response)
        //     // }
        // });
    });
        alert('sdsi');
        e.preventDefault();
    })
